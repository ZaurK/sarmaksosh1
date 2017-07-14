<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?php echo content_url();?>/assets/images/favicons/favicon-16x16.png" sizes="16x16">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Just for debugging purposes. Dont actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	  <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <![endif]-->
  </head>

  <body id="body">
 <?php
				    $argss = array(
	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
										  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
	'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => 'mnav',              // (string) class контейнера (div тега)
	'container_id'    => '',              // (string) id контейнера (div тега)
	'menu_class'      => 'menu',          // (string) class самого меню (ul тега)
	'menu_id'         => '',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
				
				
				?> 
				
<div class="mheader">	
	<div class="container">
	   
        <div class="col-lg-3">		
				<div id="mylogo" class="mlogo1"><a href="<?php echo get_home_url(); ?>">МКОУ "Средняя общеобразовательная <br>школа 1" <br>с.п.Сармаково</a></div>
		</div>
        <div class="col-lg-9">
		    <div class="row headtop">
		        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-3 col-lg-offset-3 text-center"><div class="mdate" style="">sarmakovo1@mail.ru</div></div>
			    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-3 text-center"><div class="mmphone">+7(6637) 78-1-42</div></div>
			    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-3 text-center"><div class="mcontacts">КБР, Зольский р-н, с.п. Сармаково, ул. Ленина,150</div></div>
            </div>
            <div class="row rownav">
			    <div class="col-sm-12 col-xs-12">  
				
                   <?php wp_nav_menu($argss); ?> <span style="float:right"><?php get_search_form(); ?></span>
				   
			    </div>
				
						        
            </div>					
	    </div>
	
	</div><!-- /.container -->
</div>



<div class="bottom-float_elements hidden-xs">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect to-top-btn mdl-shadow--2dp md-card-early is-visible" id="toTopScrollButton" data-upgraded=",MaterialButton,MaterialRipple">
        <i class="material-icons">keyboard_arrow_up</i>
    <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 160.392px; height: 160.392px; transform: translate(-50%, -50%) translate(28px, 26px);"></span></span></button>
     
</div> 
 	