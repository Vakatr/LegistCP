<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>

<? include "modals/modal-delete.php" ?>
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
    <? for ($i = 0; $i<15; $i++): ?>
      <tr>
        <td>Это ID</td>
        <td>Тестовая новость</td>
        <td>25.04.1971</td>
        <td>01.02.2020</td>
        <td  class="btn-table-no-padd"><a href="edit/"> <div class="btn-item-edit"></div></a></td>
        <td class="btn-table-no-padd"><div class="btn-item-delete" data-toggle="modal" data-target="#Modal_Delete"></div></td>
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

<div class="txt-right block-btn-create">
  <a href="create/" class="btn btn-primary btn-add">Добавить новость</a>
</div>

<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
