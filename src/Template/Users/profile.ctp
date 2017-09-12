moj profil

<?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']);  ?>
<br>
<br>
<div class="row">
  <div class="large-6 columns"><?= "Username: ";?></div>
  <div class="large-6 columns"><?=  $userProfile['user_name']?></div>
</div>
<div class="row">
  <div class="large-6 columns"><?= "Name: ";?></div>
  <div class="large-6 columns"><?=  $userProfile['first_name']?></div>
</div>
<div class="row">
  <div class="large-6 columns"><?= "Surname: ";?></div>
  <div class="large-6 columns"><?=  $userProfile['last_name']?></div>
</div>
<div class="row">
  <div class="large-6 columns"><?= "E-mail: ";?></div>
  <div class="large-6 columns"><?=  $userProfile['email']?></div>
</div>
<div class="row">
  <div class="large-6 columns"><?= "Gender: ";?></div>
  <div class="large-6 columns"><?=  $userProfile['gender']?></div>
</div>


