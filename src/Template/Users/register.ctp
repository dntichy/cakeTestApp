
<br>
<div class="index large-4 medium-4 large-offset-2 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center"><?=__('Registration'); ?></h2>
        <?= $this->Form->create($user); ?>
        <?= $this->Form->input(__('user_name')); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('gender'); ?>
        <?= $this->Form->input('password', array('type' => 'password', 'label' =>__('Password'))); ?>
        <?= $this->Form->submit(__('Register'), array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>