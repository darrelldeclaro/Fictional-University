<?php
    get_header();
    pageBanner(array(
        'title' => 'All Programs',
        'subtitle' => 'There is something for everyone. Have a look around.'
    ));
?>
    
 
        <div class="container container--narrow page-section">

            <ul class="link-list min-list">
            
            <?php     
                while(have_posts()) {
                    the_post(); ?>
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>    
                        
            <!-- warning for while-loop {} will have no ";" -->
            <?php }
            //  refer to settings under reading goto blog pages
            echo paginate_links();
            ?>

            </ul>
        </div>
    </div>
<?php
    get_footer();
?>
