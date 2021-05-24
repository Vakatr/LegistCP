<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>


<div class="txt-right block-btn-create">
  <a href="create/" class="btn btn-primary btn-add">Добавить новость</a>
</div>

<table class="news-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Название</td>
      <td>Дата создания</td>
      <td>Дата изменения</td>
      <td width="25px"></td>
      <td width="25px"></td>
    </tr>
  </thead>
  <tbody>
    <? for ($i = 0; $i < count($server_answer); $i++): ?>
      <tr>
        <td><?= $server_answer[$i]->id ?></td>
        <td><?= $server_answer[$i]->title ?></td>
        <td><?= $server_answer[$i]->dateOfCreated ?></td>
        <td><?= $server_answer[$i]->dateOfUpdated ?></td>
        <td  class="btn-table-no-padd"><a href="edit?id=<?= (int) $server_answer[$i]->id ?>"> <div class="btn-item-edit"></div></a></td>
        <td class="btn-table-no-padd"><div class="btn-item-delete" data-toggle="modal" data-target="#Modal_Delete<?= $i ?>"></div></td>
        <? include "modals/modal-delete.php" ?>
      </tr>
  <? endfor ?>
  </tbody>
  <tfoot>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td></td>
    </tr>
  </tfoot>
</table>



<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
