$(document).ready(function () {

     $('#register').submit(function(e) {
                e.preventDefault();
                var user_name = $('#username').val();
                var first_name = $('#firstName').val();
                var birth_date = $('#demo-desktop').val();
                var last_name = $('#lastName').val();
                var email = $('#email').val();
                var password = $('#password').val();

                $(".error").remove();

                if (first_name.length < 1) {
                  $('#firstName').parent().after('<span class="error">This field is required</span>');
                }
                if (last_name.length < 1) {
                  $('#lastName').parent().after('<span class="error">This field is required</span>');
                }
                 if (user_name.length < 1) {
                  $('#username').parent().after('<span class="error">This field is required</span>');
                }
                if (birth_date.length < 1) {
                  $('#birth_date').parent().after('<span class="error">This field is required</span>');
                }
                if (email.length < 1) {
                  $('#email').parent().after('<span class="error">This field is required</span>');
                } else {
                  var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
                  var validEmail = regEx.test(email);
                  if (!validEmail) {
                    $('#email').parent().after('<span class="error">Enter a valid email</span>');
                  }
                }
                if (password.length < 8) {
                  $('#password').parent().after('<span class="error">Password must be at least 8 characters</span>');
                }
              });
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        // $(this).css({
        // 	position: 'relative',
        // 	left: '100px',
        // 	top: '20px'
        // });
        // $('#sidebar').hasClass('active') ? $(".navbar-brand").show() : $(".navbar-brand").hide();
    });

     mobiscroll.settings = {
        lang: 'en',             // Specify language like: lang: 'pl' or omit setting to use default
        theme: 'ios'            // Specify theme like: theme: 'ios' or omit setting to use default
    };
    
    $(function () {
    
        // Mobiscroll Calendar initialization
        $('#demo-mobile').mobiscroll().calendar({
            display: 'bubble'   // Specify display mode like: display: 'bottom' or omit setting to use default
        });
    
        // Mobiscroll Calendar initialization
        $('#demo-desktop').mobiscroll().calendar({
            display: 'bubble',  // Specify display mode like: display: 'bottom' or omit setting to use default
            touchUi: false      // More info about touchUi: https://docs.mobiscroll.com/4-5-2/calendar#opt-touchUi
        });
    
    });
    	
			$('#editor').jqte();
		
			$('.jqte_editor').css({ height: '300px' });

			$('.jqte_toolbar').css({ height: '50px' });
			$('.jqte_tool_label').css({ height: '20px' });
            $('.selection').selectpicker();

            

            


});







		

			

		

