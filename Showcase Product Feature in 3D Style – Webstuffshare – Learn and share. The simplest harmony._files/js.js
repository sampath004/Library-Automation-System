jQuery(document).ready(function() {

	/*
	//Internet Explorer
	if(jQuery.browser.msie) {
		jQuery(".content .left").prepend('<div id="ie">I optimize the tutorial and demo on this website for Firefox/Chrome/Safari/Opera only, try them to get the better result, thanks!.</div>');
		jQuery('#ie').slideDown();
	}
	*/
	
	//Form Email Subscribtion
	jQuery('.form-text').css('color','#d6d6d6');
	
	jQuery('.email-subcribe-box').click(function() {
		
		if(jQuery(this).val() == "Enter your email here") {
			jQuery(this).val('');
			jQuery(this).css('color','#333');
		}
		
	}).blur(function() {
		
		if(jQuery(this).val() == "") {
			jQuery(this).val('Enter your email here');
			jQuery(this).css('color','#d6d6d6');
		}
		
	});
	
	//Form Search
	jQuery('.form-text-search').click(function() {
		
		if(jQuery(this).val() == "Let me help you find something") {
			jQuery(this).val('');
			jQuery(this).css('color','#333');
		}
		
	}).blur(function() {
		
		if(jQuery(this).val() == "") {
			jQuery(this).val('Let me help you find something');
			jQuery(this).css('color','#d6d6d6');
		}
		
	});
	
	//Download and Demo button
	jQuery('.button-download-psd, .button-preview-jpeg, .button-show-implementation, .button-download-source').bind('click', function() {
		//window.open(jQuery(this).children('a').attr('href'));
		window.location = jQuery(this).children('a').attr('href');
	});
	
	//Rope on Tags
	jQuery('.rope img').hover(function() {
		jQuery(this).animate({'marginTop':'-1em'}, 200);
	}, function() {
		jQuery(this).animate({'marginTop':'-2em'}, 200);
	});
	
	jQuery('.more-tags').toggle(function() {
	
		contentTagsHeight	= jQuery('.content-list-tag').height();
		
		jQuery('.list-tag').animate({height : '185px'}, function() {
			jQuery('.list-tag').animate({height : contentTagsHeight});
		});
		
		
	}, function() {
		
		contentTagsHeight	= parseInt(jQuery('.content-list-tag').height()) + 10;
		contentTagsHeight	= contentTagsHeight+'px';
		
		jQuery('.list-tag').animate({height : contentTagsHeight}, function() {
			jQuery('.list-tag').animate({height : '195px'});
		});
		
	});
	
	//TipTip
	jQuery('.tiptip').tipTip({'defaultPosition':'top'});
	jQuery('.email-subcribe-box').tipTip({'defaultPosition':'bottom', 'activation':'focus'});
	
	//Disable border bottom on image post
	jQuery('.content-post a:has(img)').css('border', '0px');
	
});