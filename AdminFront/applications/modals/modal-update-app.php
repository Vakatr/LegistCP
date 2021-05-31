<div class="modal fade" id="Modal_Update_App<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Заявка от пользователя <?= $value->userId->firstName . " " . $value->userId->lastName ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="modal-update-app" method="POST">
        <input type="hidden" name="CUR_STATUS_<?= $value->id?>" value="<?= $value->status ?>" />
        <input type="hidden" name="ID_ZAYAVKA" value="<?= $value->id ?>" />
        <input type="hidden" name="REQUEST_TEXT" value="<?= $value->request_text ?>" />
        <input type="hidden" name="FILE_KEY" value="<?= $value->file ?>" />
        <div class="modal-body modal-update-app">
          <div class="col-md-12">
            <div class="name-field">Статус заявки:</div>
            <div class="radio-buttons">
              <div class="radio-btn">
                <input class="radio-check" type="radio" <? if ($value->status != "Заявка"): ?>disabled<?endif?> name="STATUS_<?= $value->id ?>" value="Заявка" id="radio_zayavka<?= $key ?>" />
                <label class="label-radio" for="radio_zayavka<?= $key ?>">Заявка</label>
              </div>
              <div class="radio-btn">
                <input class="radio-check" type="radio" <? if ($value->status != "Заявка"): ?>disabled<?endif?> name="STATUS_<?= $value->id ?>" value="Принят" id="radio_accept<?= $key ?>" />
                <label class="label-radio" for="radio_accept<?= $key ?>">Принят</label>
              </div>
              <div class="radio-btn">
                <input class="radio-check" type="radio" <? if ($value->status != "Заявка"): ?>disabled<?endif?> name="STATUS_<?= $value->id ?>" value="Отклонен" id="radio_cancel<?= $key ?>" />
                <label class="label-radio" for="radio_cancel<?= $key ?>">Отклонен</label>
              </div>
            </div>
          </div>
          <? if ($value->request_text): ?>
            <div class="col-md-12">
              <div class="name-field">Текст заявки:</div>
              <div class="text-request">
                <?= $value->request_text ?>
              </div>
            </div>
        <? endif ?>
        <? if ($value->file): ?>
          <div class="col-md-12">
            <a class="file-download" href="<?= $SERVER_URL . "/file/" . $value->file ?>">Скачать прикрепленный файл</a>
          </div>
        <? endif ?>
        <div class="col-md-12">
          <div class="name-field">Ваше решение:</div>
          <textarea name="DECISION_TEXT" <? if ($value->status != "Заявка"): ?>disabled<?endif?> required placeholder="Напишите здесь свое решение" class="input-control" ><?= $value->decision ?></textarea>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <? if ($value->status == "Заявка"): ?>
            <button type="submit" name="UPDATE_APP" value="Удалить" class="btn btn-primary">Отправить</button>
          <? endif ?>
        </div>
    </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    var status = $('input[name="CUR_STATUS_<?= $value->id?>"]').val();
    $('input[name="STATUS_<?= $value->id ?>"]').each(function() {
      if (status == $(this).val())
        $(this).attr('checked','checked');
    });

  });
</script>
