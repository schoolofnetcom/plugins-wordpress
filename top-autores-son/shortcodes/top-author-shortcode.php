<?php  
function shortcode_top_autores_front_end(){

       
        $dados = get_users(array("orderby"=>"post_count","order"=>"DESC"));

        echo "<h1> TOP Autores</h1>";
        echo "<p> Uma lista com os usuários que mais postaram em toda a história desse site</p>";
        
        foreach ($dados as $dado) {

            	echo "<hr>";
       
                echo get_avatar($dado->id)."<br>";

            	echo "<bold>Nome: ".esc_html($dado->user_nicename)."</bold><br>";
            	echo "<bold>Email: ".esc_html($dado->user_email)."</bold><br>";

                 if (empty($dado->user_url)) {
                 	$dado->user_url = "Esse Usuário não tem site.";
                 }

                 echo "<bold>Numero de posts: ".count_user_posts($dado->id)."</bold><br>";

            	echo "<bold>Site: ".$dado->user_url."</bold><br>";
            	$link = get_author_posts_url($dado->id);
            	echo "<a href='$link'><button>Visualizar Posts</button></a>";

            }    
    }

   function shortcode_top_autores_register(){

       add_shortcode( 'top-autores', 'shortcode_top_autores_front_end' );

   }