<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>

<? include "modals/modal-delete.php" ?>
<table class="news-table">
  <thead>
    <tr>
      <td>№</td>
      <td>Логин</td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Статус</td>
      <td>Роль</td>
      <td width="25px"></td>
      <td width="25px"></td>
    </tr>
  </thead>
  <tbody>
      <?  $count = 1;?>
    <? for ($i = 0; $i<count($server_answer); $i++): ?>

      <tr>
        <td><?=$count++ ?></td>
        <td><?= $server_answer[$i]->name ?></td>
        <td><?= $server_answer[$i]->firstName ?></td>
        <td><?= $server_answer[$i]->lastName ?></td>
        <td><?= $server_answer[$i]->status ?></td>
        <td><?= $server_answer[$i]->roles[0] ?></td>
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
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
  </tfoot>
</table>

<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
