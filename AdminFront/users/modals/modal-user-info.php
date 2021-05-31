<div class="modal fade" id="Modal_user_info<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Информация о пользователе</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="name-field">id:</div>
            <div class="text-request">
              <?= $value->id ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Логин:</div>
            <div class="text-request">
              <?= $value->name ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Имя:</div>
            <div class="text-request">
              <?= $value->firstName ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Фамилия:</div>
            <div class="text-request">
              <?= $value->lastName ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">E-mail:</div>
            <div class="text-request">
              <?= $value->email ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Статус:</div>
            <div class="text-request">
              <?= $value->status ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Роль:</div>
            <div class="text-request">
              <?= $value->roles[0] ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="name-field">Последняя авторизация:</div>
            <div class="text-request">
              <?= date( "d-m-Y H:i:s", strtotime($value->lastVisit)); ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="DELETE" value="Удалить" class="btn btn-primary">Закрыть</button>
        </div>
    </div>
  </div>
</div>
