<?php 
get_header(  );
?>
<style>
	h1 {
    font-size: 5em;
    text-align: center;
    text-transform: capitalize;
    margin-top: 36px;
}
img {
    margin: 0 auto;
    text-align: center;
    display: block;
}
p {
    margin: 0 auto;
    width: 65%;
    line-height: 1.6;
}
img {
    margin: 0 auto;
    text-align: center;
    display: block;
    padding: 5em;
}
</style>
<header class="header">
        <div class="container">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/menu_logo.png" alt="logo" class="image_responsive"></a>
            </div>
                <?php  dynamic_sidebar( 'h_menu' ); ?>
        </div>
    </header>
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
		<h1><?php the_title(  ); ?></h1>
		<img src="<?php echo the_post_thumbnail_url(  ); ?>">
		<?php
		the_content(  );
	}
}
 get_footer();
 ?>