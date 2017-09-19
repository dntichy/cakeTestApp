<div class="panel large-6 medium-6 columns">
    <h2 class="text-center"><?= __('Registration'); ?></h2>
    <?= $this->Form->create($user); ?>
    <?= $this->Form->input('email'); ?>
    <?= $this->Form->input(__('user_name')); ?>
    <?= $this->Form->input('password', array('type' => 'password', 'label' => __('Password'))); ?>
    <?= $this->Form->input(__('first_name')); ?>
    <?= $this->Form->input(__('last_name')); ?>
    <?= $this->Form->input('gender', ['type' => 'select', 'options' => ['none', 'male', 'female']]); ?>
    <?= $this->Form->submit(__('Register'), array('class' => 'button')); ?>
    <?= $this->Form->end(); ?>
</div>