<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($photo) ?>
    <fieldset>
        <legend><?= __('Add Photo') ?></legend>
        <?php
            echo $this->Form->control('id_users');
            echo $this->Form->control('id_photoalbums');
            echo $this->Form->control('path');
            echo $this->Form->control('size');
            echo $this->Form->control('filename');
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
