

<br>

<div class="index large-4 medium-4 large-offset-2 medium-offset-4 columns">
    <div class="panel">


        <h2 class="text-center"><?= __('Login')?></h2>


        <?= $this->Form->create(); ?>

        <?= $this->Form->input('email', ['label' =>__('Imelo')]); ?>
        <?= $this->Form->input('password',['label' =>__('Password')
        ]); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>


    </div>
</div>
