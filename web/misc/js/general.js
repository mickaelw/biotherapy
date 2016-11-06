$(function(){
	$('#search-ajax, #search-refresh').on('click', function(){
		var main = $('#main-ajax');
		var ajax = $(this).attr('data-ajax');
		$('#main-type').html(' ').css('visibility','hidden');
		refreshSearch(ajax, main);
		return false;
	});
	$('#main-search').on('change', 'select', function(){
		loadSC($(this),true,null);
	});
	
	$('header nav ul a').juizScrollTo('slow');
	
	/* Gestion favoris */
	$('#main-center').on('click', '.search-card-favorite, .card-favorite', function(){
		var cardID = $(this).parent().attr('data-card-id');
		var ajax = $(this).attr('data-ajax');
		var obj = $(this);
		$.post(ajax,{cardId: cardID}, function(data){
			if(data == '1'	)
				obj.addClass('selected');
			else
				obj.removeClass('selected');
		});
	});
	
	/* Gestion autocomplete */
	$('#autocomplete').on('keyup', function(){
		var word = $(this).val().toLowerCase();
		var content = $('#search-content');
		var resultTxt = ' fiches trouvées';
		
		content.find('article').each(function(){
			var h2 = $('h2 a', this).text();
			
			var txt = $('.search-card-text', this).text();
			var text = $('.search-card-text', this).html();
			text = text.replace(/<\s*\/?\s*span\s*.*?>/g,'');
			
			if(word == '')
			{
				$('h2 a', this).html(h2);
				$('.search-card-text', this).html(txt);
				return true;
			}
			
			if(h2.toLowerCase().indexOf(word.toLowerCase()) > -1 || txt.toLowerCase().indexOf(word.toLowerCase()) > -1){
				$(this).show();
				
				h2 = h2.replace(new RegExp('('+word+')','gi'), '<span class="highlight">$1</span>');
				$('h2 a', this).html(h2);
				
				text = text.replace(new RegExp('('+word+')','gi'), '<span class="highlight">$1</span>');
				$('.search-card-text', this).html(text);
			}
			else
				$(this).hide();
				
		});
		
		if(content.find('article:visible').length < 2)
			resultTxt = ' fiche trouvée';
		
		$('#search-nb-result').text(content.find('article:visible').length + resultTxt);
	});
	/*$('#autocomplete').autocomplete({
		lookup: biotherapies,
		onSelect: function (suggestion) {
			$('#search-ajax').click();
		},
		beforeRender: function (container) {
			container.find('.autocomplete-suggestion').each(function(){
				var title = $(this).text();
				$(this).attr('title',title);
			});
		}
	});*/
});
function refreshSearch(url,content){
	var serialize = $('#main-search form').serialize();
	content.load(url, serialize, function(){
		$('.search-card-text').dotdotdot({ellipsis: '... '});
		/* Drag post it */
		$('#search-postit-download').draggable({
			cursor: 'move',
			drag: function(event,ui){
				$(this).css({
					'width':'240px',
					'height':'250px'  
				});
			},
			stop: function(event, ui) {
		        $.cookie('postItPositionLeft', ui.position.left);
		        $.cookie('postItPositionTop', ui.position.top);
		    }
		});
		
		var bio = $('select[name="search-biotherapy"]').val();
		var SC = $('select[name="search-clinicalSituation"]').val();
		if(bio != -1 && bio != 0)
			$('.search-card-infos').remove(); //Remove biotherapy in result when biotherapy selected
			
		if(bio != -1 && bio != 0 && SC != -1 && SC != 0){
			$('#search-icon-download').show();
			$('#search-postit-download').show();
			$(document).resize();
		}
		
		/* BOUTONS PDF */
		var url = $('#search-icon-download').attr('data-url')
		var bioID = $('select[name="search-biotherapy"]').val();
		var CS1ID = $('select[name="search-clinicalSituation"]').val();
		if(bioID != -1 && bioID != 0){
			if(CS1ID == -1 || CS1ID == 0 || typeof(CS1ID) == 'undefined')
				CS1ID = '0';
		}
		
		if(CS1ID != -1 && CS1ID != 0){
			if(bioID == -1 || bioID == 0 || typeof(bioID) == 'undefined')
				bioID = '0';
		}
			
		$('#overlay-pdf').find('.close').html('X');
		$('#overlay-pdf,#search-postit-download').find('.pdf-vPat').attr('href',url+'vPat/'+bioID+'-'+CS1ID);
		$('#overlay-pdf,#search-postit-download').find('.pdf-vMed').attr('href',url+'vMed/'+bioID+'-'+CS1ID);
		var triggers = $('#search-icon-download').overlay({
			mask: {
				color: '#ffffff',
				loadSpeed: 200,
				opacity: 0.9
			}
		});
		var buttons = $('#overlay-pdf form a').on('click', function(e){
			var vPat = buttons.index(this) === 0;
			if(vPat)
			{
				triggers.eq(0).overlay().close();
				return e.preventDefault();
			}
			else{
				triggers.eq(0).overlay().close();
				return e.preventDefault();
			}
		});
		
		$('#search-postit-download').css({
			'left' : $.cookie('postItPositionLeft')+'px',
			'top' : $.cookie('postItPositionTop')+'px'
		});
	});
			
	return false;
}
function loadSC(select, search, callback){
	var type = select.attr('name');
	var value = select.val();
	var ajax = select.attr('data-ajax');

	if(type != 'search-clinicalSituation2'){			
		$.post(ajax, {type: type , value: value}, function(data){
			if(type == 'search-biotherapy'){
				if(callback != null)
					callback();
			}
			if(type == 'search-clinicalSituation'){
				$('select[name="search-clinicalSituation2"]').parent('div:first').remove();
				$('select[name="search-clinicalSituation"]').parent('div:first').after(data);
				
				if(value != -1 && value != 0)
					$('#main-center').css('height','664px');
				else
					$('#main-center').css('height','692px');
					
				if(callback != null)
					callback();
			}
			$(window).resize();
		});
	}
	if(search)
		$('#search-ajax').click();
}