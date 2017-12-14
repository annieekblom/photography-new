   <?php 
            $terms = get_terms(array(
                'taxonomy' => 'country', 
                'hide_empty' => true ));

                    foreach($terms as $value) { ;?>
                    <div class="boxlink"><div class="boxlink-inside"><a href="/country/<?php echo $value->slug ?>">
 					<?php echo $value->name ;?> </a></div></div>
 					<?php } ;?>


<!-- removed the span around the div -->