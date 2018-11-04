(function($) {          

jQuery( document ).ready( function( $ ) {
	$('body').removeClass('no_js');
    //Adds navigation submenus indicators
    $('div.menu ul > li').each(function(){
        if( $('ul', this).length > 0 )
            $(this).children('a').append('<span class="sub-indicator"> &raquo;</span>');
    });                  
    
    // menu in responsive, with select
    if( $('body').hasClass('responsive') ) {  
        $('#nav').parent().after('<div class="menu-select"></div>');
        $('#nav').clone().appendTo('.menu-select');  
        $('.menu-select #nav').attr('id', 'nav-select').after('<div class="arrow-icon"></div>');
                  
        $( '#nav-select' ).hide().mobileMenu({
            subMenuDash : '-'
        });
//         
//         $( '#nav > ul, #nav .menu > ul' ).hide();
    }
    
    //play, zoom on image hover
	var yit_lightbox;
	(yit_lightbox = function(){
	    jQuery('a.thumb.video, a.thumb.img, img.thumb.img, img.thumb.project, .work-thumbnail a, .three-columns li a, .onlytitle, .overlay_a img, .nozoom img').hover(
	        function()
	        {
	            jQuery(this).next('.overlay').fadeIn(500);
	            jQuery(this).next('.overlay').children('.lightbox, .details, .lightbox-video').animate({
	                bottom:'40%'
	            }, 300);
	            
	            jQuery(this).next('.overlay').children('.title').animate({
	                top:'30%'
	            }, 300);
	        }
	    );
	    
	    jQuery( '.overlay' ).hover(
	        function() {},
	        function()
	        {
	            jQuery(this).children('.lightbox, .details, .lightbox-video').animate({
	                bottom:'0%'
	            }, 300);
	            jQuery(this).children('.title').animate({
	                top:'0%'
	            }, 300);
	            jQuery(this).fadeOut(300);
	        }
	    );
	    
	    // image lightbox
	    $('a.thumb.video, a.thumb.img, a.related_detail, a.related_proj, a.related_video, a.related_title, a.project, a.onlytitle').hover(function(){
	        $('<a class="zoom"></a>').appendTo(this).css({
	            dispay:'block', 
	            opacity:0, 
	            height:$(this).children('img').height(), 
	            width:$(this).children('img').width(),
	            'top': $(this).parents('.portfolio-filterable').length ? '-1px' : $(this).css('padding-top'),
	            'left':$(this).parents('.portfolio-filterable').length ? '-1px' : $(this).css('padding-left'),
	            padding:0}).append('<span>' + $(this).attr('title') + '</span>').animate({opacity:0.7}, 500);
	        },        
	        function(){           
	            $('.zoom').fadeOut(500, function(){$(this).remove()});
	        }
	    );
	    
	    $('.zoom').live('click', function(){
	    	if( $.browser.msie ) {
	    		$(this).attr('href', $(this).parent().attr('href'));
	    	}
	    });
	    
	    if( jQuery( 'body' ).hasClass( 'isMobile' ) ) {
	        jQuery("a.thumb.img, .overlay_img, .section .related_proj").colorbox({
	            transition:'elastic',
	            rel:'lightbox',
	    		fixed:true,
	    		maxWidth: '100%',
	    		maxHeight: '100%',
	    		opacity : 0.7
	        });
	        
	        jQuery(".section .related_lightbox").colorbox({
	            transition:'elastic',
	            rel:'lightbox2',
	    		fixed:true,
	    		maxWidth: '100%',
	    		maxHeight: '100%',
	    		opacity : 0.7
	        });
	    } else {
	        jQuery("a.thumb.img, .overlay_img, .section.portfolio .related_proj").colorbox({
	            transition:'elastic',
	            rel:'lightbox',
	    		fixed:true,
	    		maxWidth: '80%',
	    		maxHeight: '80%',
	    		opacity : 0.7
	        });   
	        
	        jQuery(".section.portfolio .related_lightbox").colorbox({
	            transition:'elastic',
	            rel:'lightbox2',
	    		fixed:true,
	    		maxWidth: '80%',
	    		maxHeight: '80%',
	    		opacity : 0.7
	        });   
	    }
	    
	    jQuery("a.thumb.video, .overlay_video, .section.portfolio .related_video").colorbox({
	        transition:'elastic',
	        rel:'lightbox',
			fixed:true,
			maxWidth: '60%',
			maxHeight: '80%',
	        innerWidth: '60%',
	        innerHeight: '80%',
			opacity : 0.7,
	        iframe: true,
	        onOpen: function() { $( '#cBoxContent' ).css({ "-webkit-overflow-scrolling": "touch" }) }
	    });
	    jQuery(".section.portfolio .lightbox_related_video").colorbox({
	        transition:'elastic',
	        rel:'lightbox2',
			fixed:true,
			maxWidth: '60%',
			maxHeight: '80%',
	        innerWidth: '60%',
	        innerHeight: '80%',
			opacity : 0.7,
	        iframe: true,
	        onOpen: function() { $( '#cBoxContent' ).css({ "-webkit-overflow-scrolling": "touch" }) }
	    });
	})();      

    function megamenu_dropdown() {
        /* === DROPDOWN */
        //Dropdown show/hide functions
        var cur_height = $( '#header div.menu.megamenu > ul' ).height();
        var show_dropdown = function() {
            if( $( this ).children( '.sub-menu, .children' ).length != 0 ) {    
                var height = 0;
                $( '.sub-menu, .children' ).each( function( ) {
                    
                    if( $( this ).parent().parent().parent().hasClass( 'menu' ) ) {
                        if( $( this ).height() > height )
                            { height = $( this ).height(); }
                    }
                } ); 
                
                var menu_height = height + cur_height + 20;
                $( '#header div.menu.megamenu > ul' ).stop( true, true ).animate( { height: menu_height } );
                $( '#header div.menu.megamenu > ul' ).addClass('box-shadow'); 
    
                /*
                if( $( '#menu-shadow' ).css( 'bottom' ) == '28px' ) {
                    if( !$( 'body' ).hasClass( 'page-template-home-php' ) && !$( 'body' ).hasClass( 'home' ) ) {
                        $( '#menu-shadow' ).animate( { bottom : '-' + ( menu_height - cur_height - 6 - parseInt( $( '#header div.menu > ul' ).css( 'margin-top' ) ) ) } ).show();
                    } else {
                        $( '#menu-shadow' ).animate( { bottom : '-' + ( menu_height - cur_height - 6 ) } ).show();
                    }
                }
                */
            }   
        }
        
        var hide_dropdown = function() {  
            $( '#header div.menu.megamenu > ul' ).stop( true, true ).animate( { height: cur_height } );
            $( '#header div.menu.megamenu > ul' ).removeClass('box-shadow');
            //$( '#menu-shadow' ).animate( { bottom : '28px' } ).hide();    
        }
        
        $( '#header div.menu.megamenu > ul > li' ).hover( show_dropdown );
        $( '#header div.menu.megamenu' ).hover( function() {}, hide_dropdown );
        
        //Dropdown shadow
        $( '#menu-shadow' ).hide();
        /*
        $( '#menu-shadow' ).css({
            'width' : $( 'body' ).hasClass( 'stretched' ) ? $( window ).outerWidth() : $( '#header .inner' ).width(),
            'left'  : '0px'
        });
        */
        
        //Stretched menu. DAMNED MENU!
        yit_stretch_the_menu();
        
        $( window ).resize( function() {
            yit_stretch_the_menu();  
        } );
    }
    
    function classic_dropdown() {
        var show_dropdown = function()
        {        
            var options;
            
            containerWidth = $('#header').width();
            marginRight = $('.classic ul#nav > li').css('margin-right');
            submenuWidth = $('.classic #nav ul.sub-menu').width();
            offsetMenuRight = $(this).position().left + submenuWidth;
            leftPos = -18;
            
            if ( offsetMenuRight > containerWidth )
                options = { left:leftPos - ( offsetMenuRight - containerWidth ) };    
            else
                options = {};
            
            $('ul.sub-menu:not(ul.sub-menu li > ul.sub-menu), ul.children:not(ul.children li > ul.children)', this).css(options).stop(true, true).fadeIn(300);    
        }
        
        var hide_dropdown = function()
        {
            $('ul.sub-menu:not(ul.sub-menu li > ul.sub-menu), ul.children:not(ul.children li > ul.children)', this).fadeOut(300);    
        }
            
        $('ul#nav > li').hover( show_dropdown, hide_dropdown ); 
        
        $('#nav li ul.sub-menu li, #nav li ul.children li').hover(
            function()
            {                  
                var options;
                
                containerWidth = $('#header').width();
                containerOffsetRight = $('#header').offset().left + containerWidth;
                submenuWidth = $('ul.sub-menu, ul.children', this).parent().width();
                offsetMenuRight = $(this).offset().left + submenuWidth * 2;
                leftPos = -10;
                
                if ( offsetMenuRight > containerOffsetRight )
                    $(this).addClass('left');
                    
                $('ul.sub-menu, ul.children', this).stop(true, true).fadeIn(300);
            },
        
            function()
            {
                $('ul.sub-menu, ul.children', this).fadeOut(300);
            }
        );   
    }  
    
    if ( $('#header .menu').hasClass('megamenu') ) {
        megamenu_dropdown();    
    } else {
        classic_dropdown();
    }
    
    //Form fields shadow
    $( 'form input[type="text"], form textarea' ).focus(function() {
        if( $( this ).hasClass( 'error' ) ) {
            $( this ).addClass( 'formRed' ).addClass( 'formShadowRed' );
        } else {
            $( this ).addClass( 'formBlue' );
        } 
    });
    
    $( 'form input[type="text"], form textarea' ).blur(function() {
        $( this ).removeClass( 'formBlue' ).removeClass( 'formGrey' ).removeClass( 'formShadowRed' );
    }); 
            
              
    //FILTERABLE
    if( $('.portfolio-filterable').length > 0 ) {
    	$('.gallery-categories-disabled, .portfolio-categories-disabled').addClass('gallery-categories-quicksand');
    }
    
    
    $(".gallery-wrap .internal_page_item .overlay, .section .related_project .overlay").css({opacity:0});
	$(".gallery-wrap .internal_page_item, .section .related_project > div").live( 'mouseover mouseout', function(event){ 
		if ( event.type == 'mouseover' ) $('.overlay', this).show().stop(true,false).animate({ opacity: .7 }, "fast"); 
		if ( event.type == 'mouseout' )  $('.overlay', this).animate({ opacity: 0 }, "fast", function(){ $(this).hide() }); 
	});
	
    var read_button = function(class_names) {
        
        var r = {
            selected: false,
            type: 0
        };
        
        for (var i=0; i < class_names.length; i++) {
            
            if (class_names[i].indexOf('selected-') == 0) {
                r.selected = true;
            }
        
            if (class_names[i].indexOf('segment-') == 0) {
                r.segment = class_names[i].split('-')[1];
            }
        };
        
        return r;
        
    };

    var determine_sort = function($buttons) {
        var $selected = $buttons.parent().filter('[class*="selected-"]');
        return $selected.find('a').attr('data-value');
    };

    var determine_kind = function($buttons) {
        var $selected = $buttons.parent().filter('[class*="selected-"]');
        return $selected.find('a').attr('data-value');
    };

    var $preferences = {
        duration: 500,
        adjustHeight: 'auto'
    }

    var $list = jQuery('.gallery-wrap');
    var $data = $list.clone();

    var $controls = jQuery('.portfolio-categories-quicksand, .gallery-categories-quicksand');

    $controls.each(function(i) {

        var $control = jQuery(this);
        var $buttons = $control.find('a');
        var height_list = $list.height();
        
        $('li:first-child', $control).addClass('selected');

        $buttons.bind('click', function(e) {

            var $button = jQuery(this);
            var $button_container = $button.parent();
            var button_properties = read_button($button_container.attr('class').split(' '));      
            var selected = button_properties.selected;
            var button_segment = button_properties.segment;

            if (!selected) {

                $buttons.parent().removeClass();
                $button_container.addClass('selected selected-' + button_segment).parent().children('li:first-child').addClass('first');

                var sorting_type = determine_sort($controls.eq(1).find('a'));
                var sorting_kind = determine_kind($controls.eq(0).find('a'));

                if (sorting_kind == 'all') {
                    var $filtered_data = $data.find('li');
                } else {
                    var $filtered_data = $data.find('li.' + sorting_kind);
                }

                var $sorted_data = $filtered_data.sorted({
                    by: function(v) {
                        return $(v).find('strong').text().toLowerCase();
                    }
                });

                $list.quicksand($sorted_data, $preferences, function () {
                        yit_lightbox();
                        
                        var current_height = $list.height();       
                        //$('.hentry-post').animate( { 'min-height':$list.height() }, 300 );
                        
                        
                        
                        var postsPerRow = ( $('.layout-sidebar-right').length > 0 || $('.layout-sidebar-left').length > 0 ) ? 3 : 4;
                        
                        $('.gallery-wrap li')
                            .removeClass('group')
                            .each(function(i){
                                $(this).find('div')
                                    //.removeClass('internal_page_item_first') 
                                    .removeClass('internal_page_item_last');
                                
                                if( (i % postsPerRow) == 0 ) {
                                    //$(this).addClass('group');
                                    //$(this).find('div').addClass('internal_page_item_first'); 
                                } else if((i % postsPerRow) == 2) {
                                    $(this).find('div').addClass('internal_page_item_last');
                                }
                            });
                            
                        $('.gallery-wrap:first').css('height',0);
                        
                });
    
            }
    
            e.preventDefault();
            
        });
    
    });
    
	//$('.gallery-categories-disabled, .portfolio-categories-disabled').live('click', function(e){
	//	e.preventDefault();
	//});

//ipad and iphone fix
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) ||   (navigator.userAgent.match(/iPad/i))) {
	$('#nav > li > a').click(function(){
		if( !$(this).hasClass('clickable') ) {
			$(this).addClass('clickable');
			return false;			
		}
	});
}

});

                           
        
    $.fn.sorted = function(customOptions) {
        var options = {
            reversed: false,
            by: function(a) {
                return a.text();
            }
        };

        $.extend(options, customOptions);

        $data = jQuery(this);
        arr = $data.get();
        arr.sort(function(a, b) {

            var valA = options.by($(a));
            var valB = options.by($(b));
    
            if (options.reversed) {
                return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;              
            } else {        
                return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;  
            }
    
        });

        return $(arr);

    };
    
    function yit_stretch_the_menu() { 
        if( $( 'body' ).hasClass( 'stretched' ) && $( window ).outerWidth() > 1024 ) {
            $( '#header .inner:not(.menu-select)' ).width( $( window ).width() );
            
            var space = ( ( $( window ).width() - $( '#primary .inner' ).width() ) / 2 ) + 'px';
            $( '#header div.menu > ul > li:first-child, #logo' ).css( 'margin-left', space  );
            $( '#sidebar-header' ).css( 'margin-right', space ).css( 'width', '41%' );
        } else {
            $( '#header div.menu > ul > li:first-child, #logo' ).css( 'margin-left', 0 );
        }
    }




})(jQuery);