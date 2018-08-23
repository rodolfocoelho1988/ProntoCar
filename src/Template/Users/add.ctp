<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proprietario'), ['controller' => 'Proprietario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proprietario'), ['controller' => 'Proprietario', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proprietario Veiculo'), ['controller' => 'ProprietarioVeiculo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proprietario Veiculo'), ['controller' => 'ProprietarioVeiculo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
