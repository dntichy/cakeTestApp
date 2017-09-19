<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <?= $this->Form->create($news,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add News') ?></legend>
        <?php
            echo $this->Form->control('text');
            echo $this->Form->control('title');
        echo $this->Form->control('picture',['type' => 'file', 'label' => 'Category picture']);
//        echo $this->Form->control('id_categories');
        echo $this->Form->control('categories',['type'=>'select','options'=>$categs]);
        ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

