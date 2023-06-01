<!-- File: templates/Consoles/index.php  (delete links added) -->

<h1>Consoles</h1>
<p><?= $this->Html->link("Adicionar Console", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Modelo</th>
        <th>Data de Postagem</th>
        <th>Opções</th>
    </tr>

<!-- Here's where we iterate through our $Consoles query object, printing out article info -->

<?php foreach ($consoles as $console): ?>
    <tr>
        <td>
            <?= $this->Html->link($console->title, ['action' => 'view', $console->slug]) ?>
        </td>
        <td>
            <?= $console->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $console->slug]) ?>
            <?= $this->Form->postLink(
                'Apagar',
                ['action' => 'delete', $console->slug],
                ['confirm' => 'Você tem certeza?'])
            ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>