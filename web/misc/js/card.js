$(function(){
	$('#main-type li').on('click', function(){
		var card = $(this).attr('id');
		var title = $(this).attr('data-title');
		
		$('#main-type li').removeClass('selected');
		$(this).addClass('selected');
		
		$('#main-type .line').attr('class','line '+card);
		
		$('#main-ajax h2').html(title);
		
		$('.card-content').removeClass('selected');
		$('.card-content'+'.'+ card).addClass('selected');
	});
	$('#main-type li[id="red"]').click();
});