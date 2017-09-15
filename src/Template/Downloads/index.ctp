<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Download[]|\Cake\Collection\CollectionInterface $downloads
  */
?>

    <h3><?= __('Downloads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($downloads as $download): ?>
            <tr>
                <td><?= $this->Number->format($download->id) ?></td>
                <td><?= $this->Number->format($download->id_users) ?></td>
                <td><?= h($download->path) ?></td>
                <td><?= h($download->title) ?></td>
                <td><?= $this->Number->format($download->size) ?></td>
                <td><?= h($download->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $download->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $download->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?>
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

