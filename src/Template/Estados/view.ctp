<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Veiculo'), ['controller' => 'Veiculo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estados view large-9 medium-8 columns content">
    <h3><?= h($estado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($estado->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($estado->sigla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capital') ?></th>
            <td><?= h($estado->capital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Regiao') ?></th>
            <td><?= $this->Number->format($estado->id_regiao) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Veiculo') ?></h4>
        <?php if (!empty($estado->veiculo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Placa') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Cor Id') ?></th>
                <th scope="col"><?= __('Versao Id') ?></th>
                <th scope="col"><?= __('Ano Fabricacao') ?></th>
                <th scope="col"><?= __('Ano Modelo') ?></th>
                <th scope="col"><?= __('Renavam') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->veiculo as $veiculo): ?>
            <tr>
                <td><?= h($veiculo->id) ?></td>
                <td><?= h($veiculo->placa) ?></td>
                <td><?= h($veiculo->estado_id) ?></td>
                <td><?= h($veiculo->cor_id) ?></td>
                <td><?= h($veiculo->versao_id) ?></td>
                <td><?= h($veiculo->ano_fabricacao) ?></td>
                <td><?= h($veiculo->ano_modelo) ?></td>
                <td><?= h($veiculo->renavam) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Veiculo', 'action' => 'view', $veiculo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Veiculo', 'action' => 'edit', $veiculo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Veiculo', 'action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
