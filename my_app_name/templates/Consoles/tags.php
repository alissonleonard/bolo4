<h1>
    Console tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($consoles as $consoles): ?>
    <console>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link(
            $console->title,
            ['controller' => 'Consoles', 'action' => 'view', $console->slug]
        ) ?></h4>
        <span><?= h($console->created) ?>
    </console>
<?php endforeach; ?>
</section>