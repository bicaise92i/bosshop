<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:39
  from 'module:leoslideshowviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c03fb39598_03622006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96019e77afe4ea89d894e025560cb48b7e294419' => 
    array (
      0 => 'module:leoslideshowviewstemplate',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5d42c03fb39598_03622006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bannercontainer banner-fullwidth" style="padding: 0px;margin: 0px;">
	<div class="iview iview-group-5d42c03fa95e0-1">
														
					<!-- SLIDE IMAGE BEGIN -->
					<div class="slide_config "
						 data-leo_image="/Bosshopping/themes/leo_nunica/assets/img/modules/leoslideshow/bg-slide-1-1.jpg"											
																		data-leo_pausetime="5000"
						data-leo_thumbnail="/Bosshopping/themes/leo_nunica/assets/img/modules/leoslideshow/bg-slide-1-1.jpg"
						data-leo_background="image"					
																		
						>
						
						
																					
								<div class="tp-caption  font-thin" 
									 data-x="101"
									 data-y="328"
									 data-transition="fade"
									 									 style="font-size:40px;color:#16e6ff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										Emballage d'un coup de poing
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
															
								<div class="tp-caption  font-thin" 
									 data-x="99"
									 data-y="373"
									 data-transition="fade"
									 									 style="font-size:40px;color:#16e6ff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										au-delà de son poids et sa taille
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
															
								<div class="tp-caption data-link text-uppercase btn-slide font-bold" 
									 data-x="102"
									 data-y="463"
									 data-transition="fade"
									 onclick="event.stopPropagation();window.open('https://www.prestashop.com/','_self');"									 style="font-size:14px;color:#ffffff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										Lire la suite
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
																			
				</div><!-- SLIDE IMAGE END -->
				
												
					<!-- SLIDE IMAGE BEGIN -->
					<div class="slide_config "
						 data-leo_image="/Bosshopping/themes/leo_nunica/assets/img/modules/leoslideshow/bg-slide-1-2.jpg"											
																		data-leo_pausetime="5000"
						data-leo_thumbnail="/Bosshopping/themes/leo_nunica/assets/img/modules/leoslideshow/bg-slide-1-2.jpg"
						data-leo_background="image"					
																		
						>
						
						
																					
								<div class="tp-caption  font-thin" 
									 data-x="101"
									 data-y="328"
									 data-transition="fade"
									 									 style="font-size:40px;color:#16e6ff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										Emballage d'un coup de poing
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
															
								<div class="tp-caption  font-thin" 
									 data-x="99"
									 data-y="373"
									 data-transition="fade"
									 									 style="font-size:40px;color:#16e6ff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										au-delà de son poids et sa taille
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
															
								<div class="tp-caption data-link text-uppercase btn-slide font-bold" 
									 data-x="102"
									 data-y="463"
									 data-transition="fade"
									 onclick="event.stopPropagation();window.open('https://www.prestashop.com/','_self');"									 style="font-size:14px;color:#ffffff;"									 >
									
									<!-- LAYER TEXT BEGIN -->
										Lire la suite
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
																			
				</div><!-- SLIDE IMAGE END -->
				
						</div>
</div>

<script type="text/javascript">
        ap_list_functions.push(function(){

	jQuery(".iview-group-5d42c03fa95e0-1").iView({
		// COMMON
		pauseTime:9000, // delay
		startSlide:0,
		autoAdvance: 0,	// enable timer thá»�i gian auto next slide
		pauseOnHover: 1,
		randomStart: 0, // Ramdom slide when start

		// TIMER
		timer: "360Bar",
		timerPosition: "top-right", // Top-right, top left ....
		timerX: 10,
		timerY: 10,
		timerOpacity: 0.5,
		timerBg: "#000",
		timerColor: "#EEE",
		timerDiameter: 30,
		timerPadding: 4,
		timerStroke: 3,
		timerBarStroke: 1,
		timerBarStrokeColor: "#EEE",
		timerBarStrokeStyle: "solid",
		playLabel: "Jouer",
		pauseLabel: "Pause",
		closeLabel: "Fermer", // Muli language

		// NAVIGATOR controlNav
		controlNav: 1, // true : enable navigate - default:'false'
		keyboardNav: 1, // true : enable keybroad
		controlNavThumbs: 0, // true show thumbnail, false show number ( bullet )
		controlNavTooltip: 0, // true : hover to bullet show thumnail
		tooltipX: 5,
		tooltipY: -5,
		controlNavHoverOpacity: 1, // opacity navigator

		// DIRECTION
		controlNavNextPrev: false, // false dont show direction at navigator
		directionNav: 1, // true  show direction at image ( in this case : enable direction )
		directionNavHoverOpacity: 1, // direction opacity at image
		nextLabel: "Prochain",				// Muli language
		previousLabel: "précédent", // Muli language

		// ANIMATION 
		fx: 'random', // Animation
		animationSpeed: 500, // time to change slide
//		strips: 20,
		strips: 1, // set value is 1 -> fix animation full background
		blockCols: 10, // number of columns
		blockRows: 5, // number of rows

		captionSpeed: 500, // speed to show caption
		captionOpacity: 1, // caption opacity
		captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
		customWidth: 1170,
		customHtmlBullet: false,
		rtl: false,
		height:680,
		timer_show : 2,

		//onBeforeChange: function(){}, // Triggers before a slide transition
		//onAfterChange: function(){}, // Triggers after a slide transition
		//onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		//onLastSlide: function(){}, // Triggers when last slide is shown
		//onPause: function(){}, // Triggers when slider has paused
		//onPlay: function(){} // Triggers when slider has played

		onAfterLoad: function() 
		{
			// THUMBNAIL
						
			// BULLET
						
			// Display timer
								$('.iview-group-5d42c03fa95e0-1 .iview-timer').hide();
					},

	});

	$(".img_disable_drag").bind('dragstart', function() {
		return false;
	});


// Fix : Slide link, image cant swipe
	// step 1
	var link_event = 'click';

	// step 3
	$(".iview-group-5d42c03fa95e0-1 .slide_config").on("click",function(){
		
		if(link_event !== 'click'){
			link_event = 'click';
			return;
		}

		if($(this).data('link') != undefined && $(this).data('link') != '') {
			window.open($(this).data('link'),$(this).data('target'));
		}
		
	});

	// step 2
	$(".iview-group-5d42c03fa95e0-1 .slide_config").on('swipe',function(){
		link_event = 'swiped';	// do not click event
	});
});
	 
</script>
<?php }
}
