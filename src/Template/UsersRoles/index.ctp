<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UsersRole[]|\Cake\Collection\CollectionInterface $usersRoles
  */
?>

    <h3><?= __('Users Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_roles') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersRoles as $usersRole): ?>
            <tr>
                <td><?= $this->Number->format($usersRole->id_users) ?></td>
                <td><?= $this->Number->format($usersRole->id_roles) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersRole->id_users]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersRole->id_users]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersRole->id_users], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRole->id_users)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
