<?php 

/*
 
    Plugin Name: Hello World School of Net
    Author: Victor Lima
    Description: Um plugin que vai printar a mensagem Hello World na sua tela de login.
    Version: 0.00001
    Author URI: https://google.com


*/


    function wp_printando_hello_world_na_tela_de_login(){

       
        echo "<h1>Hoje é um dia</h1>";
        echo "<style> body {background-color: black !important;}}</style>";

    }

    add_action('login_head','wp_printando_hello_world_na_tela_de_login');
   
   function wp_alterando_o_texto_do_footer_admin(){

        echo "<style>
           
            #ads-propaganda {

            
             background-color: blue;
             width:200px;
             height: 300px;
             color: white;

    }


        </style>";
        echo "<h1 id='ads-propaganda'>ADS</h1>";
      

   }
  
   add_filter('the_content','wp_alterando_o_texto_do_footer_admin');


   
