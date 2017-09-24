<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Add Role') ?></legend>
        <?php
            echo $this->Form->control('rolename');
//            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
