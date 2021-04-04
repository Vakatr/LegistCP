$( document ).ready(function() {

  var height_header = $('header').height();
  $(window).scroll(function() {

    if ($(this).scrollTop() > 1){
        $('header').addClass("sticky");
        $('a.js-logo-img').addClass("fixed-logo");
        $('.js-marg').css('margin-top', height_header);
        $('div.js-logo').css("margin", "5px 0");
        $('.personal').addClass("personal-fixed");
    }
    else{
        $('header').removeClass("sticky");
        $('a.js-logo-img').removeClass("fixed-logo");
        $('div.js-logo').css("margin", "");
        $('.js-marg').css('margin-top', '');
        $('.personal').removeClass("personal-fixed");
    }
  });

  var top_show = 150;
  var delay = 1000;
    $(window).scroll(function () {
      if ($(this).scrollTop() > top_show) $('#arrow-up').fadeIn();
      else $('#arrow-up').fadeOut();
    });
    $('#arrow-up').click(function () {
      $('body, html').animate({
        scrollTop: 0
      }, delay);
    });


    footer();
		$(window).resize(function() {
			footer();
		});

		function footer() {
			var docHeight = $(window).height(),
				footerHeight = $('footer').outerHeight(),
				footerTop = $('footer').position().top + footerHeight;
			if (footerTop < docHeight) {
				$('footer').css('margin-top', (docHeight - footerTop) + 'px');
			}
		}


// Стиль добавления файла
      $('.js-input-file').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

       $input.on('change', function(element) {
          var fileName = '';
          if (element.target.value) fileName = element.target.value.split('\\').pop();
          fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
       });
      });




});
