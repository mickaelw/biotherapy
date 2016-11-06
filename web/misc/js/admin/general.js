$(function(){
    tinymce.init({
	    selector: "textarea.edit",
	    plugins: "code fullscreen",
	    toolbar: "styleselect | undo redo | bold italic | alignleft aligncenter alignright alignjustify | outdent indent  | code fullscreen",
	    toolbar_items_size: 'small',
	    style_formats: [
        	{title: 'Header', block: 'h3', styles: {color: '#fffff', fontSize:'16px'}},
        	{title: 'Normal', block: 'p', styles: {color: '#fffff', fontSize:'12px'}},
        	{title: 'Bleu', block: 'p', styles: {color: '#048ef3', fontSize:'12px'}}
        ],
	    menubar: false,
	    statusbar: false
	});
	
	$('.actions').find('span[data-action="checkall"]').on('click', function(){
		var parent = $(this).parents('td:first');
		parent.find(':checkbox').attr('checked',true);
	});
	$('.actions').find('span[data-action="uncheckall"]').on('click', function(){
		var parent = $(this).parents('td:first');
		parent.find(':checkbox').removeAttr('checked');
	});
	
	/* BOUTONS DE SUPPRESSION */
	$('.list-obj a.item-delete').on('click', function(){
		var ref = $(this).attr('data-ref');
		
		$('#overlay-delete .success').attr('href',ref);
	});
	
	var triggers = $('.list-obj a.item-delete').overlay({
		mask: {
			color: '#ffffff',
			loadSpeed: 200,
			opacity: 0.9
		}
	});
	var buttons = $('#overlay-delete a').live('click', function(e){
		var no = buttons.index(this) === 0;
		if(no)
		{
			triggers.eq(0).overlay().close();
			return e.preventDefault();
		}
	});
	
	$('.list-obj').dataTable({
		"bPaginate": true,
		"bLengthChange": false,
		"bFilter": true,
		"bSort": true,
		"bInfo": false,
		"bAutoWidth": false,
		"iDisplayLength" : 20,
		"oLanguage": {
            "sSearch": "Recherche :",
            "sZeroRecords": "Auncun résultat trouvé"
        },
        'fnDrawCallback' : function(oSettings){
        	$('.list-obj').find('th').each(function(){
				var txt = $(this).text();
				if(txt == 'Actions')
					$(this).removeClass('sorting');
			});
        }
	});
});