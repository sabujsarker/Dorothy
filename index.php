<?php get_header(  ); ?>

<body>
   
    <!-- banner start -->
    <div class="banner">
    	<?php 
    	$banner = new WP_Query (array('post_type'=>'project','category_name'=>'banner'));
    	while ($banner->have_posts()) {
    		$banner->the_post();
    		?>
    		<div class="container">
            <div class="col-md-4">
                <img src="<?php echo get_field('logo'); ?>" alt="logo">
                <?php the_content(  ); ?>
                <h4><?php the_field('banner_heading'); ?></h4>
            </div>
            <div class="col-md-8">
    
            </div>
        </div>
    		<?php
    	}
    	 ?>
        
    </div>
    <!-- banner end -->
    <header class="header">
        <div class="container">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/menu_logo.png" alt="logo" class="image_responsive"></a>
            </div>
                <?php  dynamic_sidebar( 'h_menu' ); ?>
        </div>
    </header>
    <!-- header end  -->
    <!-- profile start  -->
    <section class="profile">
        <div class="container">
        	<?php 
        	$profile = new WP_Query(array('post_type'=>'project','category_name'=>'athor'));
        	while ($profile->have_posts()) {
        		$profile->the_post();

        		?>

            <div class="row">
                <div class="col-md-6">
                    <div class="p_left">
                        <img src="<?php echo get_field('author_image'); ?>" alt="profile" class="profile_img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p_right">
                        <h1><span><?php echo substr(get_the_title(), 0,1); ?></span><?php echo  substr(get_the_title(), 1	); ?></h1>
                        <?php the_content(  ); ?>
                             <a href="<?php the_field('button_url'); ?>"><?php the_field('button_text') ?></a>
                        </div>
                </div>
            </div>
            <?php
        	}
        	 ?>
        </div>
    </section>
    <!-- profile end -->
    <!-- blog start -->
    <section class="blog">
        <div class="container">
            <div class="row">
            <?php $heading = new WP_Query(array('post_type'=>'blog','tag_name'=>'heading'));
            if ($heading->have_posts()) {
             	$heading->the_post();
             	?>

        	<h2><?php the_field('section_heading'); ?></h2>
             	<?php
             } ?>
        	<?php $blog = new WP_Query(array('post_type'=>'blog','order'=>'ASC'));
        	if ($blog->have_posts()) { 
        	?>
        	<?php
        		while ($blog->have_posts()) {
        		$blog->the_post();

        	 ?>

                <div class="col-md-3 col-sm-6"><img src="<?php echo the_post_thumbnail_url() ?>" alt="blog_img"><a href="<?php the_permalink(  ); ?>"><p><?php the_field('button_text') ?></p></a></div>
<?php

        	}
        	}

                ?>
            </div>
        </div>
    </section>
    <!-- blog end -->
    <!-- link section start -->
    <section class="link">
        <div class="container">
        	<?php 
        	$amazon = new WP_Query(array('post_type'=>'project','category_name'=>'amazon'));
        	while ($amazon->have_posts()) {
        		$amazon->the_post();
        		?>

           <button> <a href="<?php the_field('button_url') ?>"><?php the_field('button_text') ?></a></button>
        		<?php
        	}
        	 ?>
        </div>
    </section>
    <!-- link section end -->
    <!-- slider section start -->
    <section class="slider">
        <div class="container">
            <?php $heading = new WP_Query(array('post_type'=>'slider','tag_name'=>'heading','order'=>'ASC'));
            if ($heading->have_posts()) {
                $heading->the_post();
                ?>

            <h2><?php the_field('section_heading'); ?></h2>
                <?php
             } ?>
            <div id="customers-testimonials" class="owl-carousel">
                <?php 
                    $slider = new WP_Query(array('post_type'=>'slider'));
                    if ($slider->have_posts()) {
                        while ($slider->have_posts()) {
                                $slider->the_post();
                                ?>
                     <div class="box">
                        <div class="level-item">
                            <div>
                                <div class="heading">
                                    <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/images/t_icon.png">
                                </div>
                                <div class="content">
                                    <?php the_content( );   ?>  
                                    <h3>~ <?php the_field('author_name'); ?></h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                                <?php
                        }
                    }
                 ?>
                    
                </div>
            </div>
    </section>
    <!-- slider section end -->
    <!-- footer start -->
   
   <?php get_footer(  ); ?>