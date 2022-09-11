<footer class="footer text-center py-2 theme-bg-dark">
		   
<?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);

                    }
                ?>
				<img class="mb-1 mx-auto logo" style="width: 25px" src="<?php echo $logo[0] ?>" alt="logo" >	
				
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-center">%3$s</ul>'
                        )
                    );
                ?>
             <div class="copyright" style="background-color: rgba(0, 0, 0, 0.2);">© 2022 Copyright: <a class="" href="https://google.com">test website</a>
  </div>
	    </footer>
    
    </div>
<?php
        wp_footer();
    ?>      

</body>
</html> 

