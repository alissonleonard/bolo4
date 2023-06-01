<?php
// src/Model/Table/ConsoleTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Utility\Text;

use Cake\Event\EventInterface;

use Cake\Validation\Validator;

use Cake\ORM\Query;

class ConsolesTable extends Table
{
    public function initialize(array $config): void
    {
        //save and create date modification
        $this->addBehavior('Timestamp');
        // Change this line
        $this->belongsToMany('Tags', [
            'foreignKey' => 'tag_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'console_tags',
        ]);
    }


    public function beforeSave(EventInterface $event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            // trim slug to maximum length defined in schema
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

    public function validationDefault(Validator $validator): Validator
{
    $validator
        ->notEmptyString('title')
        ->minLength('title', 10)
        ->maxLength('title', 255)

        ->notEmptyString('body')
        ->minLength('body', 10);

    return $validator;
}

public function findTagged(Query $query, array $options)
{
    $columns = [
        'Consoles.id', 'Consoles.user_id', 'Consoles.title',
        'Consoles.body', 'Consoles.published', 'Consoles.created',
        'Consoles.slug',
    ];

    $query = $query
        ->select($columns)
        ->distinct($columns);

    if (empty($options['tags'])) {
        // If there are no tags provided, find Consoles that have no tags.
        $query->leftJoinWith('Tags')
            ->where(['Tags.title IS' => null]);
    } else {
        // Find Consoles that have one or more of the provided tags.
        $query->innerJoinWith('Tags')
            ->where(['Tags.title IN' => $options['tags']]);
    }

    return $query->group(['Consoles.id']);
}


protected function _buildTags($tagString)
{
    // Trim tags
    $newTags = array_map('trim', explode(',', $tagString));
    // Remove all empty tags
    $newTags = array_filter($newTags);
    // Reduce duplicated tags
    $newTags = array_unique($newTags);

    $out = [];
    $tags = $this->Tags->find()
        ->where(['Tags.title IN' => $newTags])
        ->all();

    // Remove existing tags from the list of new tags.
    foreach ($tags->extract('title') as $existing) {
        $index = array_search($existing, $newTags);
        if ($index !== false) {
            unset($newTags[$index]);
        }
    }
    // Add existing tags.
    foreach ($tags as $tag) {
        $out[] = $tag;
    }
    // Add new tags.
    foreach ($newTags as $tag) {
        $out[] = $this->Tags->newEntity(['title' => $tag]);
    }
    return $out;
}

}