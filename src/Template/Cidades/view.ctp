<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresa'), ['controller' => 'Empresa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cidades view large-9 medium-8 columns content">
    <h3><?= h($cidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Estado') ?></th>
            <td><?= $this->Number->format($cidade->id_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capital') ?></th>
            <td><?= $cidade->capital ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Empresa') ?></h4>
        <?php if (!empty($cidade->empresa)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Empresa') ?></th>
                <th scope="col"><?= __('Cnpj') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Telefone 1') ?></th>
                <th scope="col"><?= __('Telefone 2') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Endereco') ?></th>
                <th scope="col"><?= __('Cidade Id') ?></th>
                <th scope="col"><?= __('Data Cadastro') ?></th>
                <th scope="col"><?= __('Data Expiracao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cidade->empresa as $empresa): ?>
            <tr>
                <td><?= h($empresa->id) ?></td>
                <td><?= h($empresa->nome_empresa) ?></td>
                <td><?= h($empresa->cnpj) ?></td>
                <td><?= h($empresa->cpf) ?></td>
                <td><?= h($empresa->telefone_1) ?></td>
                <td><?= h($empresa->telefone_2) ?></td>
                <td><?= h($empresa->email) ?></td>
                <td><?= h($empresa->endereco) ?></td>
                <td><?= h($empresa->cidade_id) ?></td>
                <td><?= h($empresa->data_cadastro) ?></td>
                <td><?= h($empresa->data_expiracao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Empresa', 'action' => 'view', $empresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Empresa', 'action' => 'edit', $empresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresa', 'action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
