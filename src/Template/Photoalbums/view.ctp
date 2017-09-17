<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Photoalbum $photoalbum
  */
?>

    <h3><?= h($photoalbum->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($photoalbum->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($photoalbum->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photoalbum->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Users') ?></th>
            <td><?= $this->Number->format($photoalbum->id_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($photoalbum->created) ?></td>
        </tr>
    </table>

