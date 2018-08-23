<?php

?>
<h1>
Cidades encontradas no Estado de
<?= h($cidades[0]['uf']['sigla']) ?>
</h1>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresa'), ['controller' => 'Empresa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresa', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Voltar aos Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="cidades view large-9 medium-8 columns content">
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capital') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidades as $cidade): ?>
            <tr>
                <td><?= $this->Number->format($cidade->id) ?></td>
                <td><?= h($cidade->uf['sigla']) ?></td>
                <td><?= h($cidade->nome) ?></td>
                <td><?= h($cidade->capital) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
