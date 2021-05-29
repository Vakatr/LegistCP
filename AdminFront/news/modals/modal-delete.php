<div class="modal fade" id="Modal_Delete<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Вы дейстительно хотите удалить новость с кодом <?= $server_answer[$i]->id ?>?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">
          Содержание новости: <br>
          <?= $server_answer[$i]->text ?>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="ID_NEWS" value="<?= $server_answer[$i]->id ?>" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
          <button type="submit" name="DELETE" value="Удалить" class="btn btn-primary">Удалить</button>
        </div>
    </form>
    </div>
  </div>
</div>
