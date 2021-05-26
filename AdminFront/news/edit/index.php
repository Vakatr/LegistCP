<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>

<? if($arResult['SUCCESS']): ?>
  <div id="success-in-site">
    <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span><?=$arResult['SUCCESS']?></span>
        </div>
  </div>
<? endif ?>

<? if (!$arResult['SUCCESS']): ?>
  <form method="POST" name="create-news-form" enctype="multipart/form-data">
    <div class="content-create">
      <div class="input-group">
        <div class="col-md-2 label-form">
          <label for="heading">Заголовок:</label>
        </div>
        <div class="col-md-10">
          <input type="text" required name="heading" id="heading" class="input-control" value="<?= $server_answer->title ?>" />
        </div>
      </div>
      <div class="input-group">
        <div class="col-md-2 label-form">
          <label for="description-news">Описание:</label>
        </div>
        <div class="col-md-10">
          <textarea type="text" required name="description-news" id="description-news" class="input-control" ><?= $server_answer->text ?></textarea>
        </div>
      </div>
      <div class="input-group upload-style">
        <div class="col-md-2 label-form"><label>Картинка:</label></div>
          <div class="col-md-10">
            <input type="file" accept="image/*" name="file-news" id="file" class="js-input-file" />
            <label for="file" class="btn btn-tertiary js-labelFile">
              <i class='icon icon-upload'></i>
              <span class="js-fileName">Загрузить файл</span>
          </label>
        </div>
      </div>
      <? if ($server_answer->file): ?>
        <div class="input-group">
          <div class="col-md-2 label-form"><label>Загруженное изображение:</label></div>
          <div class="col-md-10">
            <img class="img-in-news" src="<?= $SERVER_URL ?>/file/<?= $server_answer->file ?>" />
          </div>
        </div>
      <? endif ?>
      <div class="input-group">
      	<div class="col-md-2"></div>
      	<div class="col-md-10 btn-position"><input type="submit" name="submit_update_button" class="btn btn-primary btn-submit" value="Отправить" /></div>
      </div>
    </div>
  </form>
<? endif ?>

<a href="/news/">Вернуься к списку новостей</a>
<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
