<!-- File: templates/Articles/view.php -->

<h1><?= h($consoles->title) ?></h1>
<p><?= h($consoles->body) ?></p>
<p><small>Created: <?= $consoles->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $consoles->slug]) ?></p>