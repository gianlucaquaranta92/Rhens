<?php
/**
 * Template Name: Single Page
 *
 * Template used for normal sub-pages
 */
get_header();
?>
<section class="relative">
    <img 
    class="absolute top-0 left-0 w-full h-full object-cover z-[-1] " 
    src="<?php echo get_the_post_thumbnail_url(); ?>" 
    alt="<?php the_title_attribute(); ?>"
    >
    <div class="bg-black w-full h-full absolute top-0 left-0 opacity-40 z-[-1]"></div>
     <div class="page-width">
        <div>
            <h1 class="z-10 text-white"><?php the_title() ?></h1>
        </div>
    </div>
</section>


<?php
the_content();
get_template_part('template-parts/blocks/cta-block');


get_footer(); // Include the footer
?>
