

    <h3><?= __('Profile') ?></h3>

    <table cellpadding="0" cellspacing="0" border="1px solid black">


        <tr><td rowspan="5" width="20%">

                    <?php
               if($usr['avatar']==null){
               echo "bez foto";

               }else{
         echo '<img  src="data:image/jpeg;base64,'.base64_encode(stream_get_contents($usr['avatar'])).'"/>';};
                    ?>
            </td>


            <td><?= "Username: ";?></td><td><?=  $userProfile['user_name']?></td></tr>

    <tr><td><?= "Name: ";?><td><?=  $userProfile['first_name'] ?></td></tr>


      <tr><td><?= "Surname: ";?><td><?=  $userProfile['last_name']?></td></tr>


      <tr><td><?= "E-mail: ";?></td><td><?=  $userProfile['email']?></td></tr>


      <tr><td><?= "Gender: ";?></td><td><?=  $userProfile['gender']?></td></tr>

   </table>
<br>
    <?= $this->Form->create($user, ['type'=>'file']) ?>
    <?php
    echo $this->Form->control('avatar', ['type'=>'file']);    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
