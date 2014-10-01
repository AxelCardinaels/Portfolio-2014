

    <?php get_header(); ?>



    <header class="home">
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
        <div class="container">

      
          <section>
            <div class="intro">

              <h3> Introduction </h3>
              <blockquote>« Passionné de design et traqueur de détails, je réalise des créations web à l’aide de technologies performantes telles que le HTML5, CSS3, Javascript et Php pour vous prodiguer des services de qualité. Je produis également diverses illustrations de temps à autre. »</blockquote>
            </div>
          </section>
          <section>

            <h3> Derniers projets publiés </h3>
            <div class="lasttravaux">
                <?php $projets = new WP_Query(array(
                        'post_type' => 'creations',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                      <?php $image = get_field('vignette_du_projet'); ?>


               <a class="projets featured" href="<?php the_permalink() ?>" title="Vers le projet <?php the_field('nom_du_projet') ?>">
                  <figure>
                    <img class="imgpreview" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                 </figure>

                  <div>
                    <h4>
                     

                    <?php the_field('nom_du_projet') ?>

                    </h4>
                    <p>

                    <?php the_field('description_courte_du_projet') ?>

                  </p>

                  </div>
               </a>

                 <?php endwhile; ?>
                 <?php wp_reset_query(); ?>
   

               <a class="allproject push" href="http://localhost/wordpress/realisations/" title="Voir tous les projets">Voir les autres projets...</a>
          

            </div>

         

          </section>

          <section>

            <h3>Derniers articles du blogs et tweets</h3>
            <div class="postsblog">
             <?php $projets = new WP_Query(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',

                        )); ?>
                      
                      <?php while($projets->have_posts()): $projets->the_post()?>
                     

          

    
             
              <div class="posts">
                  <span class="tag<?php the_field('type')?>">Post du blog : <?php the_field('titre') ?></span> 
                  <div>
                 <a class="linkarticle" href ="<?php the_permalink() ?>"><h4><?php the_field('titre') ?></h4></a>
                
                 <a class="linkarticle" href ="<?php the_permalink() ?>"><p><?php the_field('description') ?></p></a>
              </div>
              </div>
            
                
           <?php endwhile; ?>
          <?php wp_reset_query(); ?>   
              <div class="twitter">
                <h4> Mes derniers tweets </h4>
                <a class="twitter-timeline" href="https://twitter.com/AxelCardinaels" data-widget-id="516839973958328320">Tweets de @AxelCardinaels</a>

              </div>

            </div>

          </section>
        </div>

         <?php get_footer(); ?>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
