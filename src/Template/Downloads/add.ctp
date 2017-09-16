<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($download, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Download') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('file',['type' => 'file', 'label' => 'File']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

