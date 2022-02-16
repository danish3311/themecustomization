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


<div class="owl-carousel owl-theme">
    <!-- Custom Slider -->

    <?php
$args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'order'=> 'asc'    
    ) ;
    
$wpgetslider = new WP_Query($args);
// WP_Query
while ($wpgetslider->have_posts()) {
    $wpgetslider->the_post();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); 
    ?>

    <div class="item" style="background-image: url('<?php echo $image[0]; ?>')">
        <h2><?php the_title() ?></h2>
        <p class="desc"><?php the_content()?></p>
    </div>

    <?php  
} 
?>

</div>

<!-- Custom Services -->


<div class="services_container">

<div class="serv_wrapper">

<?php
    $services_args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'order'=> 'asc',
    'posts_per_page' => '6'
    ) ;
    
$wpgetservices = new WP_Query($services_args);

// WP_wQuery

while ($wpgetservices->have_posts()) {
    $wpgetservices->the_post();
     $services_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium');
    $serv_excerpt =get_the_excerpt( $post->ID );
    ?>


<!-- Services  -->


<div class="serv_card">

<img class="serv_card_img" src="<?php echo $services_img[0] ?>" alt="">
<h5><?php the_title() ?></h5>
<p><?php echo $serv_excerpt ?></p>
<button class="serv_btn">Read More</button>

</div>



<?php }
?>
</div>
</div>






<!-- footer -->
<?php
get_footer();
?>