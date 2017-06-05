<?php 

/*

    Plugin Name: Top Autores
    Description: Gera uma lista com os autoes que mais postam, atraves de um shortcode
    Author: Victor Lima
    Version: 1.0 Beta
    Author URI: http://tehctuxbr.github.io


*/

   define('DIRETORIO_RAIZ_TOP_AUTORES', plugin_dir_path(__FILE__));

   require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/top-author-shortcode.php');
   require_once(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/WidgetTopAutores.php');


   function registrar_widgets_do_plugin_top_autores(){

      
       register_widget('WidgetTopAutores');

   }
   
   add_action('init','shortcode_top_autores_register');
   add_action('widgets_init', 'registrar_widgets_do_plugin_top_autores');
   