<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\News $news
  */
?>

    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Users') ?></th>
            <td><?= $this->Number->format($news->id_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categories') ?></th>
            <td><?= $this->Number->format($news->id_categories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($news->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($news->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td>
                <?php
           if($news['picture']==null){
           echo "bez foto";

           }else{
     echo '<img  src="data:image/jpeg;base64,'.base64_encode(stream_get_contents($news['picture'])).'"/>';};
                ?>
            </td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($news->text)); ?>
    </div>
