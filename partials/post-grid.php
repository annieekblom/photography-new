      <div class="boxes-container">
            <div class="alignleft"> <?php the_title();?> </div>
              <p><?php the_terms( $post->slug, 'Country', 'Country: ', ' / ' ); ?></p>
              <div class="squareImg">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
        </div>
