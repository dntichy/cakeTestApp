<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($usersRole) ?>
    <fieldset>
        <legend><?= __('Add Users Role') ?></legend>
        <?php
        echo $this->Form->control('users._ids', ['options' => $users, 'type' => 'select']);
        echo $this->Form->control('roles._ids', ['options' => $roles]);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

