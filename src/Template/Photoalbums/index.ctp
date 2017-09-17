<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Photoalbum[]|\Cake\Collection\CollectionInterface $photoalbums
  */
?>

    <h3><?= __('Photoalbums') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photoalbums as $photoalbum): ?>
            <tr>
                <td><?= $this->Number->format($photoalbum->id) ?></td>
                <td><?= $this->Number->format($photoalbum->id_users) ?></td>
                <td><?= h($photoalbum->title) ?></td>
                <td><?= h($photoalbum->description) ?></td>
                <td><?= h($photoalbum->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $photoalbum->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photoalbum->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photoalbum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photoalbum->id)]) ?>
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
