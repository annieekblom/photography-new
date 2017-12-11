   <?php 
            $terms = get_terms(array(
                'taxonomy' => 'country', 
                'hide_empty' => true ));

                    foreach($terms as $value) { ;?>
                    <span id="tags"><div class="boxlink"><a href="/country/<?php echo $value->slug ?>">
 					<?php echo $value->name ;?> </a></div></span>
 					<?php } ;?>

