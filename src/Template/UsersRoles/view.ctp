<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UsersRole $usersRole
  */
?>

    <h3><?= h($usersRole->id_users) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Users') ?></th>
            <td><?= $this->Number->format($usersRole->id_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Roles') ?></th>
            <td><?= $this->Number->format($usersRole->id_roles) ?></td>
        </tr>
    </table>
