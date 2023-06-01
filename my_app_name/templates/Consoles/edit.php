<!-- File: templates/Articles/edit.php -->

<h1>Editar Console</h1>
<?php
    echo $this->Form->create($consoles);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Console'));
    echo $this->Form->end();
?>