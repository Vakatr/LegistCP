<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>
<? if($arResult['SUCCESS']): ?>
  <div id="success-in-site">
    <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span><?=$arResult['SUCCESS']?></span>
        </div>
  </div>
<? endif ?>
<table class="news-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Дата создания</td>
      <td>Статус</td>
      <td>Автор</td>
      <td width="25px"></td>
    </tr>
  </thead>
  <tbody>
 <? foreach ($server_answer as $key => $value): ?>
    <tr>
        <td><?= $value->id ?></td>
        <td><?= $value->created ?></td>
        <td><?= $value->status ?></td>
        <td><?= $value->userId->name . " " . $value->userId->firstName ?></td>
        <td class="btn-table-no-padd"><div class="btn-item-view" data-toggle="modal" data-target="#Modal_Update_App<?= $key ?>"></div></td>
      </tr>
        <? include "modals/modal-update-app.php" ?>
  <? endforeach ?>
  </tbody>
  <tfoot>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
  </tfoot>
</table>
<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
