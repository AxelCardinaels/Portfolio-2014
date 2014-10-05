 <?php get_header(); ?>
    
    <header>
       <video autoplay loop>
          <source src="<?php echo get_template_directory_uri()?>/video/pluie.mp4" type="video/mp4"/>
           <source src="<?php echo get_template_directory_uri()?>/video/pluie.webm" type="video/webm"/>
        </video>
      <div class="textheader">
        <h1>Axel Cardinaels,</h1>
        <h2>Dévelopeur web</h2>
      </div>
      <nav>
          <h3>Menu</h3>
          <?php         
          $args = array(
            'theme_location'  => 'top',
            'menu'            => '',
            'container'       => 'ul',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'items',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'depth'           => 0,
            'walker'          => '');

          wp_nav_menu($args);

        ?>
          </nav>
        </header>
        <div class="container clearfix">

        
          <section class="titresans">

            <h3>Me dire bonjour !</h3>

             <?php $projets = new WP_Query(array(
                        'pagename' => 'contact',
                       

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      
            
            <div class="map">
              <div id="map-canvas"></div>
               <div class="oupeye"><p> Je proviens d'<?php the_field('ville') ?>, près du centre ville de <?php the_field('region') ?> !</p></div>
           </div>

            <div class="messageform">
              <div class="intro without fullwidth">
                <h3 class="visuallyhidden"> Introuction </h3>
                <blockquote>« <?php the_field('intro') ?> »</blockquote>
            </div>
              <form method="post">
                <label class="visuallyhidden" for="nom">Votre nom</label>
                <input type="text" name="nom" placeholder="Votre Nom"/>

                <label class="visuallyhidden" for="email">Votre email</label>
                <input type="text" name="email" placeholder="Votre email"/>

                <label class="visuallyhidden" for="message">Votre nom</label>
                <textarea name="message" placeholder="Votre message"></textarea>
              
                <input type="submit" value="Envoyer le message" class="bouton"/>
              </form>
            </div>
            


         <?php endwhile; ?>
        <?php wp_reset_query(); ?>
            
          </section>


          


          
        </div>

        <?php get_footer(); ?>
       