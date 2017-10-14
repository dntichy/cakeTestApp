
<?php foreach ($news as $newse): ?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:24px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="4" rowspan="3"><?php
        if($newse['picture']==null){
            echo "bez foto";

        }else{
            echo '<img width="100px"  src="data:image/jpeg;base64,'.base64_encode(stream_get_contents($newse['picture'])).'" />';};
        ?></th>
    <th class="tg-yw4l"><?= $newse['title'] ?></th>
  </tr>
  <tr>
    <td class="tg-yw4l"><?= $newse['text'] ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l"><?= $newse['id'] ?></td>
  </tr>
</table>

<?php endforeach; ?>

