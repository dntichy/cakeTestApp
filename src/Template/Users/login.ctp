
    <div class="panel large-6 medium-6 columns">


        <h2 class="text-center"><?= __('Login')?></h2>


        <?= $this->Form->create(); ?>

        <?= $this->Form->input('email', ['label' =>__('Imelo')]); ?>
        <?= $this->Form->input('password',['label' =>__('Password')
        ]); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>


    </div>

