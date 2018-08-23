<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proprietario'), ['controller' => 'Proprietario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proprietario'), ['controller' => 'Proprietario', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proprietario Veiculo'), ['controller' => 'ProprietarioVeiculo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proprietario Veiculo'), ['controller' => 'ProprietarioVeiculo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Proprietario') ?></h4>
        <?php if (!empty($user->proprietario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Proprietario') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Telefone Contato') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->proprietario as $proprietario): ?>
            <tr>
                <td><?= h($proprietario->id) ?></td>
                <td><?= h($proprietario->nome_proprietario) ?></td>
                <td><?= h($proprietario->email) ?></td>
                <td><?= h($proprietario->cpf) ?></td>
                <td><?= h($proprietario->telefone_contato) ?></td>
                <td><?= h($proprietario->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proprietario', 'action' => 'view', $proprietario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proprietario', 'action' => 'edit', $proprietario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proprietario', 'action' => 'delete', $proprietario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proprietario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proprietario Veiculo') ?></h4>
        <?php if (!empty($user->proprietario_veiculo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proprietario Id') ?></th>
                <th scope="col"><?= __('Veiculo Id') ?></th>
                <th scope="col"><?= __('Ano Posse') ?></th>
                <th scope="col"><?= __('Data Registro') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->proprietario_veiculo as $proprietarioVeiculo): ?>
            <tr>
                <td><?= h($proprietarioVeiculo->id) ?></td>
                <td><?= h($proprietarioVeiculo->proprietario_id) ?></td>
                <td><?= h($proprietarioVeiculo->veiculo_id) ?></td>
                <td><?= h($proprietarioVeiculo->ano_posse) ?></td>
                <td><?= h($proprietarioVeiculo->data_registro) ?></td>
                <td><?= h($proprietarioVeiculo->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProprietarioVeiculo', 'action' => 'view', $proprietarioVeiculo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProprietarioVeiculo', 'action' => 'edit', $proprietarioVeiculo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProprietarioVeiculo', 'action' => 'delete', $proprietarioVeiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proprietarioVeiculo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
