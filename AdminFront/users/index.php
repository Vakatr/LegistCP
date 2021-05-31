<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>

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
    </tr>
  </thead>
  <tbody>
    <? $count = 1; ?>
     <? foreach ($server_answer as $key => $value): ?>
      <tr>
        <td><?= $count++; ?></td>
        <td><?= $value->name ?></td>
        <td><?= $value->firstName ?></td>
        <td><?= $value->lastName ?></td>
        <td><?= $value->status ?></td>
        <td><?= $value->roles[0] ?></td>
        <td class="btn-table-no-padd"><div class="btn-item-view" data-toggle="modal" data-target="#Modal_user_info<?= $key ?>"></div></td>
      </tr>
      <? include "modals/modal-user-info.php" ?>
  <? endforeach ?>
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
    </tr>
  </tfoot>
</table>

<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
