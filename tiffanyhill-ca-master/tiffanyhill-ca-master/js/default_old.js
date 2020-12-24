var goToByScroll = function(evt) {
	evt.preventDefault();
	var sectionname = $(this).attr('href');
	$('html,body').animate({scrollTop: $(sectionname).offset().top - 50 },'slow');
};

$(document).ready(function() {
	$('.navbar a').bind('mousedown', goToByScroll);
  $('#home a').bind('mousedown', goToByScroll);
	$(".fancybox").fancybox();
  $("#popup").click();
  $('.carousel').carousel({interval:5000});

   $('form').submit(function(event) {
      event.preventDefault();
      var $form = $(this);

      $form.find('.has-error').removeClass('has-error');
      $form.find('.help-block').remove();
      $form.find('.alert').remove();

      $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: $form.serialize(),
        dataType: 'JSON',
        success: function(data) {
          $('#flashMessage').html(data.message).removeAttr('class').addClass('alert alert-danger').show();
						if (data.success == 0) {
          } else {
            ga('send', 'event', 'Registration', 'Success', 'Tiffany Hill', 1);
            window.location = url+'/thank-you';
          }
        }
      });
   });

	 $('[data-fancybox]').fancybox({
			toolbar  : false,
			smallBtn : true,
			iframe : {
				preload : false
			}
		});

	 if($('.fncynewlink')[0]){
		    setTimeout(function() {
		         $(".fncynewlink").click();
		    },1000);

			$(".fncynewlink").fancybox(/*{
			       //href: "http://localhost/projects/regalcresthomes/img/upper-west-side-grand-opening.jpg",
			        afterShow: function () {

			            $(".fancybox-bg").wrap($("<a />", {
			                href:  url+"/learnmore", //or your target link
			                target: "_blank"
			            }));
			        }
			 }*/);
		}

});




    $(document).ready(function(){

        var radio_no = $("#Subscription-radio0");

        var radio_yes = $("#Subscription-radio1");

        radio_no.on("click", function() {

			$("#subscription-positive").fadeOut();
			$(".subscription-positive").fadeOut();
            $("#subscription-negative").fadeIn();

            radio_yes.on("click", function() {
				$("#subscription-positive").fadeIn();
				$(".subscription-positive").fadeIn();
                $("#subscription-negative").fadeOut();

            });
        });

        $( "#force-yes" ).click(function() {
            console.log("force yes has been clicked - deeeeaaaal with it");
            radio_yes.click();
			$("#subscription-positive").fadeIn();
			$(".subscription-positive").fadeIn();
            $("#subscription-negative").fadeOut();

            $( "#form-submit").click();
        });
	});


function loadAndResizeEvents() {
 if($('#home').length > 0 ){
    $('#home').css('margin-top',$('header').outerHeight());
 }
}

$(document).ready(loadAndResizeEvents);

$(window).resize(loadAndResizeEvents);
