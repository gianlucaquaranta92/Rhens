<?php
// Retrieve ACF fields and store them in variables, checking if each field exists and is not empty
$hero_subheading = !empty(get_field('hero_top_title')) ? get_field('hero_top_title') : '';
$hero_heading = !empty(get_field('hero_title')) ? get_field('hero_title') : '';
$hero_description = !empty(get_field('hero_subtitle')) ? get_field('hero_subtitle') : '';
$hero_button_url = !empty(get_field('hero_button_link')) ? get_field('hero_button_link') : '';
$hero_button_text = !empty(get_field('hero_button_text')) ? get_field('hero_button_text') : '';
$hero_image = !empty(get_field('hero_image')) ? get_field('hero_image') : '';
$hero_award_text = !empty(get_field('hero_award_text')) ? get_field('hero_award_text') : '';
?>

<section class="hero-section relative flex ">
    
    <img style="z-index: -1" class=" absolute top-0 left-0 w-full h-full object-cover " src="<?php echo esc_url($hero_image); ?>" alt="Hero Image">
      <div style="z-index: -1; opacity: 60% ;" class="z-1 absolute top-0 left-0 w-full h-full bg-black opacity-[30%]"></div>          
    <div class="page-width h-auto relative">
        <img class="absolute top-[-6rem] right-0 max-w-[120px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/deckia-logo.jpg">
        <div class="flex flex-row items-center h-full">
            <div class="flex flex-col gap-4 grow w-full text-white max-w-[60%]">
                <h4 class="text-primary font-bold"><?php echo esc_html($hero_subheading); ?></h4>
                <h1><?php echo esc_html($hero_heading); ?></h1>
                <div class="text-xl  font-bold"><?php echo esc_html($hero_description); ?></div>

                <?php if ($hero_button_url && $hero_button_text): ?>
                    <div>
                        <a class="button text-white border-4 border-white w-max" href="<?php echo esc_url($hero_button_url); ?>">
                            <?php echo esc_html($hero_button_text); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex justify-end grow">
            
            </div>
        </div>
    </div>
</section>

