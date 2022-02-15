<?php
/**
 * Template Name: My Custom Template
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>


<!-- WPQuery -->
<div class="owl-carousel owl-theme">
    
<?php
$args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'order'=> 'asc'    
    ) ;

$wpgetslider = new WP_Query($args);

while ($wpgetslider->have_posts()) {
    $wpgetslider->the_post();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); 
    ?>
    
    <div class="item" style="background-image: url('<?php echo $image[0]; ?>')">
        
    <h2 ><?php the_title() ?></h2>
        <p class="desc"><?php the_content()?></p>
    </div>

<?php  
} 
?>
</div>

<!-- footer -->
<?php
get_footer();
?>