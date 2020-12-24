var goToByScroll = function(evt) {
	if(evt!=undefined){
		evt.preventDefault();
	}

	var sectionname = location.hash;

	var cnt=50;
	if(sectionname=='#register-now'){
		cnt=150;
	}

	$('html,body').animate({scrollTop: $(sectionname).offset().top - cnt },'slow');
};

$(document).ready(function() {
	if(location.hash!=undefined){
		if(location.hash=='#register-now'){
			goToByScroll();
		}
	}
	$('.navbar a').bind('mousedown', goToByScroll);
  $('#home a').bind('mousedown', goToByScroll);
	$('#registerNowLink a').bind('click', goToByScroll);
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
					if (data.success == 0) {
            $('#flashMessage').html(data.message).removeAttr('class').addClass('alert alert-danger').show();
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

	if($("#hm-popup").length>0){
		$("#hm-popup").click();
	}

	 if($('.fncynewlink')[0]){
		    setTimeout(function() {
		         $(".fncynewlink").click();

		    },1000);

			$(".fncynewlink").fancybox({
					afterLoad : function( instance, current ) {
								var nHeight=$('.fancybox-iframe').contents().find("#frame-container").height()+16;

								$('.fancybox-iframe').height(nHeight);
								var nWidth=$('.fancybox-iframe').contents().find("#frame-container").width()+16;
								$('.fancybox-iframe').width(nWidth);

					}
				}
				/*{
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
			if($(".realtor").length>0){
				$(".realtor").click(function(){

					if($(this).val()==1){
						$("#brokerage-wrap").removeClass("collapse").find("#brokerage").attr("required", true);
					}else{
						$("#brokerage-wrap").addClass("collapse").find("#brokerage").attr("required", false);
					}
				});
			}

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
