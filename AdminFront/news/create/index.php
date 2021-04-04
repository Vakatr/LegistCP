<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>
<form method="POST" name="create-news-form" enctype="multipart/form-data">
  <div class="content-create">
    <div class="input-group">
      <div class="col-md-2 label-form">
        <label for="heading">Заголовок:</label>
      </div>
      <div class="col-md-10">
        <input type="text" required name="heading" id="heading" class="input-control" value="<?= $_REQUEST['heading']?>" />
      </div>
    </div>
    <div class="input-group">
      <div class="col-md-2 label-form">
        <label for="description-news">Описание:</label>
      </div>
      <div class="col-md-10">
        <textarea type="text" required name="description-news" id="description-news" class="input-control" ><?= $_REQUEST['description-news']?></textarea>
      </div>
    </div>
    <div class="input-group upload-style">
      <div class="col-md-2 label-form"><label>Картинка:</label></div>
        <div class="col-md-10">
          <input type="file" name="file-news" id="file" class="js-input-file" />
          <label for="file" class="btn btn-tertiary js-labelFile">
            <i class='icon icon-upload'></i>
            <span class="js-fileName">Загрузить файл</span>
        </label>
      </div>
    </div>
    <div class="input-group">
    	<div class="col-md-2"></div>
    	<div class="col-md-10 btn-position"><input type="submit" name="submit_create_button" class="btn btn-primary btn-submit" value="Отправить" /></div>
    </div>
  </div>
</form>
<a href="/news/">Вернуться к списку новостей</a>
<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
