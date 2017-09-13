

<?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']);  ?>

    <h3><?= __('Profile') ?></h3>
    <table cellpadding="0" cellspacing="0" border="1px solid black">
      <tr><td><?= "Username: ";?></td>
      <td><?=  $userProfile['user_name']?></td></tr>

    <tr><td><?= "Name: ";?>
      <td><?=  $userProfile['first_name']?></td></tr>


      <tr><td><?= "Surname: ";?>
     <td><?=  $userProfile['last_name']?></td></tr>


      <tr><td><?= "E-mail: ";?></td>
      <td><?=  $userProfile['email']?></td></tr>


      <tr><td><?= "Gender: ";?></td>
      <td><?=  $userProfile['gender']?></td></tr>

   </table>
