<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($download) ?>
    <fieldset>
        <legend><?= __('Add Download') ?></legend>
        <?php
            echo $this->Form->control('id_users');
            echo $this->Form->control('path');
            echo $this->Form->control('title');
            echo $this->Form->control('size');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

