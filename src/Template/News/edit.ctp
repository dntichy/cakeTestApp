<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Edit News') ?></legend>
        <?php
            echo $this->Form->control('id_users');
            echo $this->Form->control('text');
            echo $this->Form->control('title');
            echo $this->Form->control('id_categories');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
