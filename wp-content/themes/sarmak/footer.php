<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

	<div class="mfooter">
	
	    <div class="container">
		<div class="row">
           <div class="container">		
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
			<div class="row margin-top36 imglinks">
				 <div class="col-lg-3  col-sm-6 col-lg-offset-1 margin-bot36 text-left">© МКОУ «СРЕДНЯЯ ОБЩЕОБРАЗОВАТЕЛЬНАЯ ШКОЛА №1» с. п. Сармаково 2015-2017</div> 
				 <div class="col-lg-3  col-sm-6 margin-bot36 text-left">Телефон: +7(6637) 78-1-42<br>
E-mail: sarmakovo1@mail.ru</div> 
				 <div class="col-lg-2  col-sm-6 margin-bot36 text-left">И.О. директора школы:
Тяжгова Галимат Хазреталиевна</div> 
				 <div class="col-lg-2  col-sm-6 margin-bot36 text-left">Заместитель:
Мешева Римма Мухамедовна</div> 
				
			     
			</div>
		    </div>
		    </div>
		</div>
		   
	       
			 
	    </div>
	</div>
	
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   


   <?php wp_footer(); ?> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/logic.js?v=<?php echo getStaticWebSiteVersion(); ?>"
    charset="utf-8"></script>
	<script>
jQuery(function() { 
	jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){

jQuery('.headtop').removeClass('headtop1');
jQuery('.headtop').addClass('headtop2');
jQuery('.mheader').removeClass('mheader1');
jQuery('.mheader').addClass('mheader2');
jQuery('#mylogo').addClass('mlogo2');
jQuery('#mylogo').removeClass('mlogo1');


}
else{
jQuery('.headtop').removeClass('headtop2');
jQuery('.headtop').addClass('headtop1');
jQuery('.mheader').addClass('mheader1');
jQuery('.mheader').removeClass('mheader2');
jQuery('#mylogo').addClass('mlogo1');
jQuery('#mylogo').removeClass('mlogo2');

}
});
});	
	</script>
	<script>
jQuery(function() { 
jQuery(window).scroll(function() {
if(jQuery(this).scrollTop() != 0) { 
jQuery('#toTopScrollButton').fadeIn();
} else { 
jQuery('#toTopScrollButton').fadeOut(); 
} 
});
jQuery('#toTopScrollButton').click(function() {
jQuery('body,html').animate({scrollTop:0},800); 
});
});
</script>

<script>
jQuery(function() {
   jQuery('body').on('click', '#search_button', (function( e ) {
       e.preventDefault(); // отменяем стандартное поведение
      jQuery(".search-layout__obfuscator").addClass("is-visible");      
   }));
    jQuery('body').on('click', '#close-btn', (function( e ) {
       e.preventDefault(); // отменяем стандартное поведение
      jQuery(".mdl-layout__obfuscator").removeClass("is-visible");      
   }));
    jQuery('body').on('moseover', '.phone_call_button ', (function( e ) {
       e.preventDefault(); // отменяем стандартное поведение
      jQuery(".mdl-layout__obfuscator").addClass("is-visible");      
   }));
});

</script>

  </body>
</html>