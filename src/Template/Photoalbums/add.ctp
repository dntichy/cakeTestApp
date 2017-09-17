<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($photoalbum) ?>
    <fieldset>
        <legend><?= __('Add Photoalbum') ?></legend>
        <?php
            echo $this->Form->control('id_users');
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
