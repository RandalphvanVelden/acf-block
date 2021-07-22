jQuery(function($) {
	$( ".wp-admin .block-editor #editor" ).on( "focus", ".acf-field-oembed input", function() {
	  $(this).parents('.acf-field-oembed').addClass('active');
	});
	$( ".wp-admin .block-editor #editor" ).on( "blur", ".acf-field-oembed input", function() {
	  $(this).parents('.acf-field-oembed').removeClass('active');
	});

});

