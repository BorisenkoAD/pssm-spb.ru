// ���������� �������
jQuery(document).ready(function() {
	$("#owl-reviews").owlCarousel();
});
// ���������� ���������	
jQuery(document).ready(function() {		 
	$("#owl-partners").owlCarousel({	  
		autoPlay: 3000, //Set AutoPlay to 3 seconds	 
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]		 
	});
});
// ����������� ������� � ������� ��������� ������������
jQuery('body').scrollspy({ target: '.navbar-example' })
// ������� ������� �� ��������	
jQuery(function(){
	$('.some_link').on('click', function(e){
		$('html,body').stop().animate({ scrollTop: $('#some_point').offset().top }, 1000);
		e.preventDefault();
	});
});	
 // ������ �����		
jQuery(function () {
	$.scrollUp();
});	
// ���� � ������� � ��������
jQuery(document).ready(function($) {
	$('#myTabExample a:last').tab('show');
 });
// ���� � ������� �����������	
 jQuery(document).ready(function($) {
	$('#myStepExample a:last').tab('show');
});

/*������� ���������� �������� � �����*/

//��� ������� �� ����� ������, ������� ����� .btn ������� ��������� ���� � id="myModal"

// �������� � �����������
