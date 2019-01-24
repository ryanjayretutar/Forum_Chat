$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        // $(this).css({
        // 	position: 'relative',
        // 	left: '100px',
        // 	top: '20px'
        // });
        // $('#sidebar').hasClass('active') ? $(".navbar-brand").show() : $(".navbar-brand").hide();
    });
    	
			$('#editor').jqte();
		
			$('.jqte_editor').css({ height: '300px' });

			$('.jqte_toolbar').css({ height: '50px' });
			$('.jqte_tool_label').css({ height: '20px' });
            $('.selection').selectpicker();

});




		

			

		

