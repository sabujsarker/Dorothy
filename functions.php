<?php 

function dorothy(){
	wp_enqueue_style( 'fonts','https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet' );
	wp_enqueue_style( 'fonts_all', 'https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet' );
	wp_enqueue_style( 'fonts_lato', 'https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet');
	wp_enqueue_style( 'carosol','https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
	wp_enqueue_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css');
	wp_enqueue_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet');
	wp_enqueue_style( 'font_awesome', get_stylesheet_directory_uri().'/fonts/fontawesome/css/all.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'coustom', get_stylesheet_directory_uri().'/css/coustom.css', array()	,'1', 'all' );
	wp_enqueue_style( 'dorothy', get_stylesheet_uri() );

	wp_enqueue_script( 'dorothy', get_theme_file_uri().'/js/main.js',array('jquery'),'1.1',true);
	wp_enqueue_script( 'owl', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js' );
	wp_enqueue_script( 'carosol','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js' );

}
add_action( 'wp_enqueue_scripts', 'dorothy' );
add_filter( 'use_block_editor_for_post', '__return_false', 10 );


add_theme_support( 'post-thumbnails' );


function empt($var,$icon2){
 if (!empty($var)) {
?>
<a href="<?php  echo $var ?>"><i class="<?php echo $icon2 ?>" aria-hidden="true"></i></a>
<?php
}
}

register_sidebar(array(
	'name'          => __( 'Footer menu', 'dorothy' ),
	'id'            => 'f_menu',
	'description'   => '',
	'class'         => '',
	'before_widget' => ' <div class="footer_menu">
                		 <ul>',
	'after_widget'  => '</ul>
                        </div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );
register_sidebar(array(
	'name'          => __( 'Header menu', 'dorothy' ),
	'id'            => 'h_menu',
	'description'   => '',
	'class'         => '',
	'before_widget' => ' <div class="col-md-9">
                		<div class="menu">
                    	<ul>',
	'after_widget'  => '</ul>
                		</div>
           			 	</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );
add_theme_support( 'custom-logo',array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' )));
 add_image_size( 'custom-size', 220, 180 );
 ?>