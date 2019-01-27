$(document).ready(function () {

     // $('#register').submit(function(e) {
     //            e.preventDefault();
     //            var user_name = $('#username').val();
     //            var first_name = $('#firstName').val();
     //            var birth_date = $('#demo-desktop').val();
     //            var last_name = $('#lastName').val();
     //            var email = $('#email').val();
     //            var password = $('#password').val();

     //            $(".error").remove();

     //            if (first_name.length < 1) {
     //              $('#firstName').parent().after('<span class="error">This field is required</span>');
     //            }
     //            if (last_name.length < 1) {
     //              $('#lastName').parent().after('<span class="error">This field is required</span>');
     //            }
     //             if (user_name.length < 1) {
     //              $('#username').parent().after('<span class="error">This field is required</span>');
     //            }
     //            if (birth_date.length < 1) {
     //              $('#birth_date').parent().after('<span class="error">This field is required</span>');
     //            }
     //            if (email.length < 1) {
     //              $('#email').parent().after('<span class="error">This field is required</span>');
     //            } 
     //            else {
     //              var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
     //              var validEmail = regEx.test(email);
     //              if (!validEmail) {
     //                $('#email').parent().after('<span class="error">Enter a valid email</span>');
     //              }
     //            }
     //            if (password.length < 8) {
     //              $('#password').parent().after('<span class="error">Password must be at least 8 characters</span>');
     //            }
     //          });


     $( "#register").validate( {
        rules: {
          firstName: "required",
          lastName: "required",
          username: {
            required: true,
            minlength: 5
          },
          password: {
            required: true,
            minlength: 8
          },
          confirmPass: {
            required: true,
            minlength: 8,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
           confirmEmail: {
            required: true,
            email: true,
             equalTo: "#email"
          },
          agree: "required"
        },
        messages: {
          firstName: "Please enter your firstname",
          lastName: "Please enter your lastname",
          username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirmPass: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          // Add `has-feedback` class to the parent div.form-group
          // in order to add icons to inputs
          element.parent( ".col-sm-6" ).addClass( "has-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-remove form-control-feedback'></span>" ).insertAfter( element );
          }
        },
        success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-check form-control-feedback'></span>" ).insertAfter( $( element ) );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parent( ".col-sm-6" ).addClass( "has-error" ).removeClass( "has-success" );
          $( element ).next( "span" ).addClass( "fa-remove" ).removeClass( "fa-check" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $( element ).parent( ".col-sm-6" ).addClass( "has-success" ).removeClass( "has-error" );
          $( element ).next( "span" ).addClass( "fa-check" ).removeClass( "fa-remove" );
        }
      } );
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        // $(this).css({
        //  position: 'relative',
        //  left: '100px',
        //  top: '20px'
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







    

      

    

