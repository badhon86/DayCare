/**/
/* on load event */
/**/
"use strict";
jQuery(document).ready( function (){
	jQuery('body').append('<div id="tuner" class="tuner"><label class="main_panel_header">Style Switcher</label><div class="colors"><div id="color-1" class="color-picker" data-color="#3eb2cf" style="background-color:#3eb2cf;">Main</div><div id="color-2" class="color-picker" data-color="#f8f2dc" style="background-color:#f8f2dc;">Secondary</div><div id="color-3" class="color-picker" data-color="#f9e8b2"style="background-color:#f9e8b2;">Outline</div><div id="color-4" class="color-picker" data-color="#fec20b"style="background-color:#fec20b;">Menu</div><div id="color-5" class="color-picker" data-color="#fd8e00"style="background-color:#fd8e00;">Menu Hover</div></div><div class="separate_line"></div><div class="boxed-switcher-wrapp"><div class="title-boxed">Boxed</div><div class="boxed-switcher"><div class="on">On</div><div class="off active">Off</div></div></div><div class="separate_line"></div><div class="menu-switcher-wrapp"><div class="title-menu">theme header</div><div class="menu-switcher"><div class="default active"><img src="tuner/tuner/images/switcher_img/menu-01.png"></div><div class="logo-out-menu"><img src="tuner/tuner/images/switcher_img/menu-02.png"></div><div class="without-bees"><img src="tuner/tuner/images/switcher_img/menu-03.png"></div></div></div><div class="separate_line"></div><div class="style-switcher-wrapper"><div class="title-style-switcher">theme style</div><div class="style-switcher"><div class="wave-style active"><img src="tuner/tuner/images/switcher_img/theme-style-01.png"></div><div class="flat-style"><img src="tuner/tuner/images/switcher_img/theme-style-02.png"></div></div></div><div class="separate_line"></div><div class="patterns-wrapper"><div class="title-patterns">patterns</div><ul class="patterns"><li data-pattern="1" class="color-blue active"></li><li data-pattern="2" class="color-blue"></li><li data-pattern="3" class="color-blue"></li><li data-pattern="4" class="color-blue"></li><li data-pattern="5" class="color-blue"></li><li data-pattern="6" class="color-blue"></li><li data-pattern="7" class="color-blue"></li><li data-pattern="8" class="color-blue"></li><li data-pattern="9" class="color-blue"></li></ul></div><i id="tuner-switcher" class="fa fa-cogs"></i></div><div id="tuner-style-1" class="tuner-style" style="display: none;">/* MAIN COLOR */.item .date:before,.item .date .month,.cws_button:hover,input[type="submit"]:hover,.page_footer .cws_button,.page_footer .button,.page_footer input[type="submit"],.copyrights_area .cws_button,.copyrights_area input[type="submit"],blockquote,table thead th,.pagination .page_links>.page-numbers.current:before, .header_mask ,.pagination .page_links>span:not(.dots):before,.gallery-icon a:before,.pricing_table_column .top_section,.pricing_table_column.active_table_column .btn_section>a,.pricing_table_column.active_table_column .separate,.pricing_table_column:hover .separate,.tabs .tab,.accordion_title .accordion_icon,.accordion_section.active .accordion_title,.cws_tweet .tweet-icon:before,.cws_progress_bar .progress,.cws_fa_wrapper .cws_fa:not(.alt),a:hover>.cws_fa_wrapper .cws_fa.alt,.cws_button.alt>span,.testimonial,.cws-widget .search-form:before,.owl-pagination .owl-page,#recentcomments>.recentcomments:before,.comments-area .comment_list .reply .comment-reply-link:hover,.comments-area .comment-respond .comment-form .submit,.cws_ourteam .cws_ourteam_items .social_links a,.news .media_part.only_link,.footer_wrapper_copyright,.mini-cart,.mini-cart .button,input[type="radio"]:checked:before,.pic .links a,.site_top_panel .cws_social_links:after,.copyrights_area .cws_social_links .cws_social_link,.copyrights_area .lang_bar ul ul,.cws_callout,.site_top_panel .site_top_panel_toggle:before,.site_top_panel .site_top_panel_toggle:after,.footer_container .woocommerce-product-search:before,.scroll_top, .woocommerce .button,ul.products li .media_part .rating_cont:before,ul.products li .media_part .rating_cont .button-shadow,.price_slider .ui-slider-range{background-color: #<span>cws_theme_color#</span>;}.tp-leftarrow.round,.tp-rightarrow.round,.rev_slider_wrapper{background-color: #<span>cws_theme_color#</span> !important;}.news .media_part,.price_slider_wrapper .price_slider,.cws_ourteam_items .media_part,.post_info,.news .media_part,.cws_img_frame,img[class*="wp-image-"],.gallery-icon, .woocommerce .media_part,.pricing_table_column,.pricing_table_column .top_section:after,.accordion_title,.accordion_content,.carousel_header .carousel_nav i,.cws_portfolio_items .item .media_part,.carousel_nav_panel .prev,.carousel_nav_panel .next,.cws_fa_wrapper:hover>a>i + .ring,a:hover>.cws_fa_wrapper>i:not(.alt) + .ring,.cws_button.alt:hover,.cws_oembed_wrapper,.bordered,.cws-widget .portfolio_item_thumb .pic,.select2-container .select2-choice .select2-arrow,.post_item .post_thumb_wrapp,#recentcomments>.recentcomments,.ce .map-border,.wp-playlist .mejs-container,.lang_bar>div:not(.lang_sel_list_vertical):not(.lang_sel_list_horizontal)>ul:before{border-color: #<span>cws_theme_color#</span>;}.select2-choice{border-color: #<span>cws_theme_color#</span> !important;}.select2-drop,.select2-drop-active{border-color: #<span>cws_theme_color#</span> !important;}.post_info,.info i,.post_info>*>i,.post_info .comments_link a,ul li:before,.carousel_header .carousel_nav i,.carousel_nav_panel .prev,.carousel_nav_panel .next,.cws_progress_bar .pb_title .indicator,.select2-container .select2-choice .select2-arrow,.comments-area .comment_list .comment-meta .author-name,.cws_milestone,.copyrights_container,.mini-cart .total>*,input[type=checkbox]:checked:before,.banner_404,.msg_404 span,.cws_tweet:before,.cws_fa_wrapper .cws_fa.alt,.site_top_panel #top_panel_links .share-toggle-button,.site_top_panel .cws_social_links .cws_social_link,.site_top_panel #top_panel_links .search_icon,.site_top_panel .mini-cart{color: #<span>cws_theme_color#</span>;}</div><div id="tuner-style-2" class="tuner-style" style="display: none;">/* SECONDARY COLOR */canvas.breadcrumbs{color: #<span>cws_theme_secondary_color#</span>;}.page_title.flat{background: #<span>cws_theme_secondary_color#</span>;}</div><div id="tuner-style-3" class="tuner-style" style="display: none;">/* OUTLINE COLOR */.pagination .page_links>*,.pagination .page_links>.page-numbers.current:after,.pagination .page_links>span:not(.dots):after,.cws-widget #wp-calendar td,.benefits_area{background: #<span>cws_theme_outline_color#</span>;}canvas.separator{color: #<span>cws_theme_outline_color#</span>;}.page_title.flat{border-color: #<span>cws_theme_outline_color#</span>;}</div><div id="tuner-style-4" class="tuner-style" style="display: none;">/* MENU COLOR */.header_logo_part.with_border .logo,.main-nav-container .menu-item a,.woocommerce-product-search,.woo_panel,.main-nav-container .menu-item:hover>.sub-menu>.menu-item,.mobile_nav .menu-item,.item .date .springs:before,.item .date .springs:after,.cws_button,input[type="submit"],.page_footer .cws_button:hover,.page_footer .button:hover,.page_footer input[type="submit"]:hover,.copyrights_area .cws_button:hover,.copyrights_area input[type="submit"]:hover,.cws_callout .button_section>a:hover,.pricing_table_column:hover .top_section,.pricing_table_column.active_table_column .top_section,.pricing_table_column.active_table_column .btn_section>a:hover,.pricing_table_column .separate,.tabs .tab.active,.accordion_section.active .accordion_icon,.separate,.cws_fa_wrapper:hover>a .cws_fa,a:hover>.cws_fa_wrapper .cws_fa:not(.alt),.cws_button.alt:hover>span,.dropcap,.cws-widget .widget-title:after,.cws-widget #wp-calendar tbody td#today,.owl-pagination .owl-page.active,.comments-area .comment_list .reply .comment-reply-link,.comments-area .comment-respond .comment-form .submit:hover,.cws_ourteam .cws_ourteam_items .social_links a:hover,.mini-cart .button:hover,.mini-cart:hover,.site_top_panel .cws_social_links.expanded:after,.pic .links .link a,.pic .links .link-item-bounce,.pic .links .link-toggle-button,.pic .links_popup .link a,.pic .links_popup .link span,.pic .links_popup .link-item-bounce,.pic .links_popup .link-toggle-button,.cws_img_frame:after,.gallery-icon a:after,.mobile_menu_header .mobile_menu_switcher,.post_item .post_thumb_wrapp .links span,.ce_toggle.alt .accordion_section .accordion_content,.ce_accordion.alt .accordion_section .accordion_content,body.wave-style hr,.item .date.def_style .month:before,.scroll_top:hover{background-color: #<span>cws_menu_color#</span>;}.cws-widget .search-form,.price_slider .ui-slider-handle,.woocommerce span.onsale{background-color: #<span>cws_menu_color#</span> !important;}.bees:after,.item .date,.pricing_table_column:hover,.pricing_table_column.active_table_column,.pricing_table_column:hover .top_section:after,.pricing_table_column.active_table_column .top_section:after,.cws_tweet .tweet-icon,.cws_fa_wrapper .ring,.cws_button.alt,.comments-area .comment_list .avatar,.comments-area .comment-respond,.tp-leftarrow.round,.tp-rightarrow.round,.site_top_panel form.search-form .search-field,.testimonial .author img{border-color: #<span>cws_menu_color#</span>;}.post_info a,.post_info>*,.info,.post_info .v_sep,.bread-crumbs .delimiter,blockquote:before,blockquote:after,.carousel_header .carousel_nav i:hover,.carousel_nav_panel .prev:hover,.carousel_nav_panel .next:hover,.cws_progress_bar .pb_title,.testimonial .quote .quote_link,.testimonial .quote + .author>.dott>span:first-child,.testimonial .quote + .author>.dott>span:last-child,.testimonial:before,.testimonial:after,#recentcomments .comment-author-link a,.comments-area .comment_list .comment-meta .comment_date,.comments-area .required,.cws_ourteam:not(.single) .cws_ourteam_items .positions a,.footer_container .cws-widget .post_item .post_date,.footer_container .post-date,.woo_mini_cart .total>.amount,.banner_404 span,.cws_tweet .tweet_date,.p_cut,.news .more-link,.site_top_panel.show-search #top_panel_links .search_icon,.site_top_panel .mini-cart:hover,.footer_container ul.product_list_widget li a, .footer_container ul.product_list_widget ins,.footer_container ul.product_list_widget span.amount,.gridlist-toggle a.active:before{color: #<span>cws_menu_color#</span>;}</div><div id="tuner-style-5" class="tuner-style" style="display: none;">/* MENU COLOR HOVER */.main-nav-container .menu-item:hover>a,.header_nav_part.mobile_nav .main-nav-container .menu-item.current-menu-ancestor,.header_nav_part.mobile_nav .main-nav-container .menu-item.current-menu-item,.main-nav-container .menu-item.current-menu-ancestor>a,.main-nav-container .menu-item.current-menu-item>a,.main-nav-container .sub-menu .menu-item:hover>a,.main-nav-container .sub-menu .menu-item.current-menu-ancestor>a,.main-nav-container .sub-menu .menu-item.current-menu-item>a,.cws_callout .button_section>a:hover{background-color: #<span>cws_menu_color_hover#</span>;}.main-nav-container .menu-item:hover>a>.bees:after,.main-nav-container .menu-item.current-menu-item>a>.bees:after,.main-nav-container .menu-item.current-menu-ancestor>a>.bees:after,.header_logo_part.with_border .logo{border-color: #<span>cws_menu_color_hover#</span>;}</div>  <style id="cws-cp-1"></style> <style id="cws-cp-2"></style> <style id="cws-cp-3"></style><style id="cws-cp-4"></style> <style id="cws-cp-5"></style> <style id="cws-cp-6"></style>')
	
	jQuery('#tuner-switcher').on('click', function(){
		
		jQuery('#tuner').toggleClass('tuner-visible');
	});

	jQuery('.boxed-switcher').on('click', function(){
		if (jQuery(this).hasClass('boxed_on')) {
			jQuery(this).removeClass('boxed_on');
			jQuery('div.page').removeClass('page_boxed');
		}else{
			jQuery(this).addClass('boxed_on');
			jQuery('div.page').addClass('page_boxed');
		}
	});

	jQuery('.style-switcher>*').on('click', function(){
		jQuery(this).addClass('active').siblings().removeClass('active');
		if (jQuery(this).hasClass("flat-style")) {
			jQuery('.page').addClass('page_flat');
			jQuery('.page_title').addClass('flat');
			jQuery('.benefits_area').removeClass('wave')
		}else{
			jQuery('.page').removeClass('page_flat');
			jQuery('.page_title').removeClass('flat');
			jQuery('.benefits_area').addClass('wave')
		};
	});

	jQuery('.menu-switcher>*').on('click', function(){
		jQuery(this).addClass('active').siblings().removeClass('active');
		if (jQuery(this).hasClass("logo-out-menu")) {
			jQuery('.site_header').addClass('logo-out-menu');
			jQuery('.site_header').removeClass('without-bees');
		}else if (jQuery(this).hasClass("without-bees")){
			jQuery('.site_header').removeClass('logo-out-menu');
			jQuery('.site_header').addClass('without-bees')
		}else{
			jQuery('.site_header').removeClass('logo-out-menu');
			jQuery('.site_header').removeClass('without-bees')
		};
	});

	jQuery('.color-picker').each( function(){
		var el = jQuery(this);
		var def_color = el.data( 'color' );
		var id = el.attr('id');
		var matches = /color-(\d+)/.exec( id );
		if ( matches != null ){
			var index = matches[1];
			var tuner_id = 'tuner-style-' + index;
			var style_id = 'cws-cp-' + index;
			var tuner_el = jQuery( '#' + tuner_id );
			var style_el = jQuery( '#' + style_id );
			if ( tuner_el.length && style_el.length ){
				
				el.ColorPicker({
					color: def_color,
					onShow: function(colpkr)
					{
						jQuery(colpkr).fadeIn(300);
						return false;
					},
					onHide: function(colpkr)
					{
						jQuery(colpkr).fadeOut(300);
						return false;
					},
					onChange: function (hsb, hex, rgb) {
						el.css('background-color', '#' + hex);
						tuner_el.find('span').text(hex);
						style_el.text(tuner_el.text());
						canvas_init(index, hsb, hex, rgb);
					}
				});
			}

		}
	});

	var body_el, body_cls, matches, old_pattern, new_pattern_index, new_pattern;
	body_el = jQuery('.pattern');
	body_cls = body_el.attr('class');
	matches = /pattern-(\d+)/.exec( body_cls );
	if ( matches != null ){
		old_pattern = matches[0];
	}
	jQuery('.patterns li').each(function(){
		if(jQuery(this).attr('data-pattern') == old_pattern.replace('pattern-','')){
			jQuery(this).addClass('active').siblings().removeClass("active");
		}
	})


	jQuery('#tuner').on('click', '.patterns li', function()	{
		var body_el, body_cls, matches, old_pattern, new_pattern_index, new_pattern;
		body_el = jQuery('.pattern');
		body_cls = body_el.attr('class');
		matches = /pattern-(\d+)/.exec( body_cls );
		if ( matches != null ){
			old_pattern = matches[0];
			body_el.removeClass(old_pattern);
		}
		jQuery(this).addClass('active').siblings().removeClass("active");
		new_pattern_index = jQuery(this).data('pattern');
		new_pattern = "pattern-" + new_pattern_index;
		body_el.addClass(new_pattern);
	});
	function canvas_init(index, hsb, hex, rgb){

		cws_Hex2RGBwithdark(hex)

		var y,x,ctx,cw,ox,oy,scale

		var c = jQuery("canvas.breadcrumbs");
		var h_c = jQuery("canvas.half_sin");
		var f_h_c = jQuery("canvas.footer_half_sin");
		var t_h_c = jQuery("canvas.top_half_sin");
		var br = jQuery("canvas.separator");

		var cloud = jQuery("canvas.cloud");
		var w_cloud = jQuery("canvas.white_cloud");


		var style = jQuery("#cws-custom-colors-css").text()


		if (c.length) {
			var crumbs_bg_color = c.attr("data-bg-color");
			var crumbs_line_color = c.attr("data-line-color")
		};

		if (br.length) {
			var sepColor = br.attr("data-line-color")
		};

		

		if (h_c.length) {
			var footer_bg_color = h_c.attr("data-bg-color");
			var footer_line_color = h_c.attr("data-line-color")
		};

		if (f_h_c.length) {
			var footer_cop_bg_color = f_h_c.attr("data-bg-color");
			var footer_cop_line_color = f_h_c.attr("data-line-color");
		};
		
		if (t_h_c.length) {
			var top_bg_color = t_h_c.attr("data-bg-color");
			var top_line_color = t_h_c.attr("data-line-color");
		};

		if (cloud.length) {
			var cloud_bg_color = cloud.attr("data-bg-color");
			var cloud_line_color = cloud.attr("data-line-color");
			var patternSrc = cloud.attr("data-pattern-src");
			var patternParentHeight = cloud.parent().innerHeight() - 170;
		};

		cw = 1170
		ox = 0
		oy = 8
		scale = 4
		var winWidth = window.innerWidth;
		var ratio =  window.devicePixelRatio;

		for (var i = c.length - 1; i >= 0; i--) {
			if ( index==2 || index==3 ) {
				var breadcrumbs_parent_height = jQuery(c[i]).parent().innerHeight();
			c[i].height = breadcrumbs_parent_height*ratio;
			c[i].width = window.innerWidth*ratio;


			c[i].style.height = breadcrumbs_parent_height +'px';//actual height of canvas
			c[i].style.width = window.innerWidth +'px';//actual width of canvas

			ctx = c[i].getContext('2d');
			console.log(ctx);
			if (index == 2) {
				crumbs_bg_color = "#"+hex;
			}
			ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
			ctx.beginPath();
			//

			sineLine(ctx,ox,oy,4,crumbs_bg_color,breadcrumbs_parent_height - 17,winWidth*ratio)
			ctx.lineTo(winWidth*ratio, breadcrumbs_parent_height);

			for (var ti=(winWidth*ratio); ti>=0; ti+=(-1) ){
				y = scale * Math.sin((-ti)/8 + 3);
				x = ti;
				ctx.lineTo(ox+x, oy-y);
			}
			ctx.lineTo(0, breadcrumbs_parent_height);
			ctx.fillStyle = crumbs_bg_color;
			ctx.fill();
			ctx.beginPath();
			if (index == 3) {
				crumbs_line_color = "#"+hex;
			}
			sineLine(ctx,ox,oy,4,crumbs_line_color,breadcrumbs_parent_height - 16,winWidth*ratio)
			}
			
		};
		for (var i = h_c.length - 1; i >= 0; i--) {
			if (index == 1) {
				footer_bg_color = cws_Hex2RGBwithdark(hex,1.67);
				footer_line_color = cws_Hex2RGBwithdark(hex,1.67);

				h_c[i].height = 10*ratio;
				h_c[i].width = (window.innerWidth)*ratio;

				h_c[i].style.height = 10 +'px';//actual height of canvas
				h_c[i].style.width = window.innerWidth +'px';//actual width of canvas

				ctx = h_c[i].getContext('2d');
				ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
				ctx.beginPath();
				//

				sineLine(ctx,ox,oy,1,'rgb('+footer_line_color+')',0,winWidth,true)
				ctx.lineTo(winWidth, 10);
				ctx.lineTo(0, 10);
				ctx.fillStyle = 'rgb('+footer_bg_color+')';
				ctx.fill();
			};
		};

		for (var i = f_h_c.length - 1; i >= 0; i--) {
			if (index == 1) {
				footer_cop_line_color = cws_Hex2RGBwithdark(hex,2.81);
				footer_cop_bg_color = cws_Hex2RGBwithdark(hex,2.81);


				f_h_c[i].height = 10*ratio;
				f_h_c[i].width = (window.innerWidth)*ratio;

				f_h_c[i].style.height = 10 +'px';//actual height of canvas
				f_h_c[i].style.width = window.innerWidth +'px';//actual width of canvas

				ctx = f_h_c[i].getContext('2d');
				ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
				ctx.beginPath();
				//
				sineLine(ctx,ox,oy,1,'rgb('+footer_cop_line_color+')',0,winWidth,true)
				ctx.lineTo(winWidth, 10);
				ctx.lineTo(0, 10);
				ctx.fillStyle = 'rgb('+footer_cop_bg_color+')';
				ctx.fill();
			};
		};

		for (var i = t_h_c.length - 1; i >= 0; i--) {
			t_h_c[i].height = 10*ratio;
			t_h_c[i].width = (window.innerWidth)*ratio;

			t_h_c[i].style.height = 10 +'px';//actual height of canvas
			t_h_c[i].style.width = window.innerWidth +'px';//actual width of canvas

			ctx = t_h_c[i].getContext('2d');
			ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
			ctx.beginPath();
			//
			sineLine(ctx,ox,oy,1,top_line_color,0,winWidth,true)
			ctx.lineTo(winWidth, 10);
			ctx.lineTo(0, 10);
			ctx.fillStyle = top_bg_color;
			ctx.fill();

		};
		
		for (var i = br.length - 1; i >= 0; i--) {
			br[i].height = 22*ratio;	
			br[i].width = (window.innerWidth)*ratio;

			br[i].style.height = 22 +'px';//actual height of canvas
			br[i].style.width = window.innerWidth +'px';//actual width of canvas

			ctx = br[i].getContext('2d');
			ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
			ctx.beginPath();
			sineLine(ctx,ox,oy,4,sepColor,0,winWidth)
		};
		if (cloud.length && (index == 3)) {
			cloud_bg_color = "#"+hex;
			var rat_coef = ratio > 1 ? 1.5 : 1 ;
			cloud[0].height = (patternParentHeight + 170)*(rat_coef*ratio);	
			cloud[0].width = (window.innerWidth)*(rat_coef*ratio);

			cloud[0].style.width=window.innerWidth+'px';//actual width of canvas
			cloud[0].style.height=(patternParentHeight + 170) +'px';//actual height of canvas

			ctx = cloud[0].getContext('2d');
			ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
			ctx.beginPath();
			cloudRandomCreator(ctx,ox,oy,8,sepColor,cloud_bg_color,winWidth,patternParentHeight*rat_coef,patternSrc);
		};
		if (w_cloud.length) {
			w_cloud[0].height = 50*ratio;
			w_cloud[0].width = (window.innerWidth)*ratio;

			w_cloud[0].style.width= window.innerWidth +'px';//actual width of canvas
			w_cloud[0].style.height= 50 +'px';//actual height of canvas


			ctx = w_cloud[0].getContext('2d');
			ratio > 1 ? ctx.scale(ratio,ratio) : '' ;
			ctx.beginPath();

			sepColor = '#ffffff';
			cloud_bg_color = '#ffffff';

			cloudRandomCreator(ctx,ox,oy,8,sepColor,cloud_bg_color,winWidth,patternParentHeight,false,true);
		};
		
	}

	function sineLine(ctx,ox,oy,lineWidth,color,topOfss,width,half_mode){
		half_mode = half_mode != undefined ? half_mode : false;
		var scale = 4;
		if (half_mode) {
			scale = 4.5;
		}
		var x,y,sin_per
		ctx.strokeStyle = color
		ctx.lineWidth = lineWidth;
		for (var t=0; t<=width; t+=1){
			if (half_mode) {
				sin_per = Math.sin(t/5) < 0 ? Math.sin(t/5)*(-1) : Math.sin(t/5);
			}else{
				sin_per = Math.sin(t/8);
			};
			y = scale * sin_per - topOfss;
			x = t;
			ctx.lineTo(ox+x, oy-y);
		}
		ctx.stroke();
	}
	function cloudRandomCreator(ctx,ox,oy,lineWidth,color,bg_color,width,patternParentHeight,patternSrc,only_top){
		patternSrc = patternSrc != undefined ? patternSrc : false;
		only_top = only_top != undefined ? only_top : false;

		var imageObj = new Image();
		imageObj.src = imageObj.src = patternSrc ? patternSrc : '';

		if (patternSrc && !only_top) {
			imageObj.onload = function() {

				var pattern = ctx.createPattern(imageObj, 'repeat');

				cloudPaint (ctx,width,patternParentHeight);
				ctx.closePath(); 
				ctx.strokeStyle = 'white';
				ctx.fillStyle = bg_color;
				ctx.fill();
				ctx.fillStyle = pattern;
				ctx.fill();
				ctx.lineWidth = lineWidth;
				ctx.stroke();
				//ctx.stroke();
			};
		}else if(!only_top){
			cloudPaint (ctx,width,patternParentHeight);
			ctx.strokeStyle = 'white';
			ctx.fillStyle = bg_color;
			ctx.fill();
			ctx.lineWidth = lineWidth;
			ctx.stroke();
		}else if(only_top){
			cloudPaint (ctx,width,0,only_top);
			ctx.strokeStyle = color;
			ctx.fillStyle = bg_color;
			ctx.fill();
			ctx.lineWidth = lineWidth;
			ctx.stroke();
		}
		
		
	}

	function cloudPaint (ctx,width,patternParentHeight,only_top){
		
		var only_top = only_top != undefined ? only_top : false;

		var ratio =  window.devicePixelRatio;
		var ratio_coef = ratio > 1 ? 1.5 : 0.93 ;
		var height_coef = (80 * ratio_coef) + patternParentHeight;
		ctx.moveTo(-10, 50);
		for (var t=0; t<=Math.floor(width/1920); t+=1){
			var addCoef = 1920*t;
			ctx.bezierCurveTo(30 + addCoef, 0, 90 + addCoef, 0, 120 + addCoef, 30);
			ctx.bezierCurveTo(130 + addCoef, 25, 150 + addCoef, 15, 170 + addCoef, 30);
			ctx.bezierCurveTo(190 + addCoef, 15, 210 + addCoef, 15, 240 + addCoef, 30);
			ctx.bezierCurveTo(260 + addCoef, 5, 330 + addCoef, 4, 360 + addCoef, 35);
			ctx.bezierCurveTo(380 + addCoef, 10, 405 + addCoef, 15, 420 + addCoef, 30);
			ctx.bezierCurveTo(430 + addCoef, 20, 465 + addCoef, 20, 480 + addCoef, 35);
			ctx.bezierCurveTo(510 + addCoef, 10, 550 + addCoef, 15, 580 + addCoef, 35);
			ctx.bezierCurveTo(590 + addCoef, 25, 610 + addCoef, 25, 620 + addCoef, 35);
			ctx.bezierCurveTo(650 + addCoef, 10, 710 + addCoef, 10, 740 + addCoef, 35);
			ctx.bezierCurveTo(755 + addCoef, 25, 770 + addCoef, 25, 790 + addCoef, 35);
			ctx.bezierCurveTo(810 + addCoef, 20, 850 + addCoef, 5, 890 + addCoef, 35);
			ctx.bezierCurveTo(920 + addCoef, 5, 970 + addCoef, 10, 990 + addCoef, 35);
			ctx.bezierCurveTo(1000 + addCoef, 30, 1025 + addCoef, 25, 1040 + addCoef, 35);
			ctx.bezierCurveTo(1060 + addCoef, 15, 1100 + addCoef, 15, 1120 + addCoef, 35);
			ctx.bezierCurveTo(1140 + addCoef, 15, 1190 + addCoef, 25, 1210 + addCoef, 35);
			ctx.bezierCurveTo(1240 + addCoef, 5, 1300 + addCoef, 5, 1330 + addCoef, 30);
			ctx.bezierCurveTo(1340 + addCoef, 10, 1370 + addCoef, 10, 1380 + addCoef, 30);
			ctx.bezierCurveTo(1410 + addCoef, 0, 1460 + addCoef, 10, 1470 + addCoef, 35);
			ctx.bezierCurveTo(1490 + addCoef, 15, 1530 + addCoef, 15, 1550 + addCoef, 30);
			ctx.bezierCurveTo(1580 + addCoef, 5, 1635 + addCoef, 5, 1665 + addCoef, 35);
			ctx.bezierCurveTo(1685 + addCoef, 20, 1700 + addCoef, 20, 1720 + addCoef, 35);
			ctx.bezierCurveTo(1750 + addCoef, 5, 1820 + addCoef, 5, 1850 + addCoef, 35);
			ctx.bezierCurveTo(1870 + addCoef, 15, 1900 + addCoef, 15, 1920 + addCoef, 30);

			if (t==Math.floor(width/1920) && !only_top) {
				for (var ti=Math.floor(width/1920); ti>=0; ti-=1){
					addCoef = 1920*ti; 
					ctx.bezierCurveTo(1900 + addCoef, height_coef + 100 - 0 , 1870 + addCoef, height_coef + 100 - 0, 1840 + addCoef, height_coef + 100 - 20);
					ctx.bezierCurveTo(1820 + addCoef, height_coef + 100 - 0 , 1750 + addCoef, height_coef + 100 - 0, 1720 + addCoef, height_coef + 100 - 30);
					ctx.bezierCurveTo(1700 + addCoef, height_coef + 100 - 20 , 1685 + addCoef, height_coef + 100 - 20,  1665 + addCoef, height_coef + 100 - 35);	
					ctx.bezierCurveTo(1635 + addCoef, height_coef + 100 - 15, 1580 + addCoef, height_coef + 100 - 15, 1550 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(1530 + addCoef, height_coef + 100 - 25, 1490 + addCoef, height_coef + 100 - 25, 1470 + addCoef, height_coef + 100 - 45);
					ctx.bezierCurveTo(1450 + addCoef, height_coef + 100 - 20, 1400 + addCoef, height_coef + 100 - 20, 1380 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(1360 + addCoef, height_coef + 100 - 20, 1330 + addCoef, height_coef + 100 - 15, 1310 + addCoef, height_coef + 100 - 30);
					ctx.bezierCurveTo(1290 + addCoef, height_coef + 100 - 10, 1230 + addCoef, height_coef + 100 - 10, 1210 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(1190 + addCoef, height_coef + 100 - 15, 1140 + addCoef, height_coef + 100 - 15, 1120 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(1100 + addCoef, height_coef + 100 - 15, 1060 + addCoef, height_coef + 100 - 20, 1040 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(1025 + addCoef, height_coef + 100 - 25, 1010 + addCoef, height_coef + 100 - 25, 990 + addCoef, height_coef + 100 - 35); 
					ctx.bezierCurveTo(960 + addCoef, height_coef + 100 - 15, 920 + addCoef, height_coef + 100 - 15, 890 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(860 + addCoef, height_coef + 100 - 10, 820 + addCoef, height_coef + 100 - 10, 790 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(775 + addCoef, height_coef + 100 - 25, 755 + addCoef, height_coef + 100 - 25, 740 + addCoef, height_coef + 100 - 40);
					ctx.bezierCurveTo(710 + addCoef, height_coef + 100 - 10, 650 + addCoef, height_coef + 100 - 10, 620 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(610 + addCoef, height_coef + 100 - 20, 590 + addCoef, height_coef + 100 - 20, 580 + addCoef, height_coef + 100 - 30);
					ctx.bezierCurveTo(550 + addCoef, height_coef + 100 - 10, 510 + addCoef, height_coef + 100 - 10, 480 + addCoef, height_coef + 100 - 30);
					ctx.bezierCurveTo(465 + addCoef, height_coef + 100 - 15, 430 + addCoef, height_coef + 100 - 15, 420 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(400 + addCoef, height_coef + 100 - 5, 360 + addCoef, height_coef + 100 - 5, 340 + addCoef, height_coef + 100 - 25);
					ctx.bezierCurveTo(310 + addCoef, height_coef + 100 - 5, 270 + addCoef, height_coef + 100 - 5, 240 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(220 + addCoef, height_coef + 100 - 15, 190 + addCoef, height_coef + 100 - 15, 170 + addCoef, height_coef + 100 - 35);
					ctx.bezierCurveTo(155 + addCoef, height_coef + 100 - 15, 135 + addCoef, height_coef + 100 - 15, 120 + addCoef, height_coef + 100 - 30);
					ctx.bezierCurveTo(100 + addCoef, height_coef + 100 - 10, 40 + addCoef, height_coef + 100 - 0, 0 + addCoef, height_coef + 100 - 30);	
					
					if (ti==0){
						ctx.bezierCurveTo( 0, height_coef + 100 - 0, -10, height_coef + 100 + 0, -30, height_coef + 100 + 0);
					}	
				}
			}else if (t==Math.floor(width/1920) && only_top) {
				ctx.lineTo(1920 + addCoef,50);
				ctx.lineTo(-10,50);
			};
			
		}			
	}
	function cws_Hex2RGBwithdark(hex,coef_color) {

		var coef_color = coef_color == undefined ? 1 : coef_color;
		var hex = hex.replace("#", "");

		var color = '';

		if (hex.length == 3) {
			color = Math.round(hexdec(hex.substr(0,1))/coef_color)+',';
			color = color + Math.round(hexdec(hex.substr(1,1))/coef_color)+',';
			color = color + Math.round(hexdec(hex.substr(2,1))/coef_color);
		}else if(hex.length == 6){
			color = Math.round(hexdec(hex.substr(0,2))/coef_color)+',';
			color = color + Math.round(hexdec(hex.substr(2,2))/coef_color)+',';
			color = color + Math.round(hexdec(hex.substr(4,2))/coef_color);
		}
		return color;
	}
	function hexdec(hex_string) {
		hex_string = (hex_string + '')
		.replace(/[^a-f0-9]/gi, '');
		return parseInt(hex_string, 16);
	}
});

