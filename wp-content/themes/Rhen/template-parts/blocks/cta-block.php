<?php
// Fetch ACF option fields and check if they are not empty
$cta_heading      = !empty(get_field('cta_heading', 'option')) ? get_field('cta_heading', 'option') : '';
$cta_text         = !empty(get_field('cta_text', 'option')) ? get_field('cta_text', 'option') : '';
$cta_button_text  = !empty(get_field('cta_button_text', 'option')) ? get_field('cta_button_text', 'option') : '';
$cta_button_link  = !empty(get_field('cta_button_link', 'option')) ? get_field('cta_button_link', 'option') : '';
$cta_image_background = !empty(get_field('cta_image_background', 'option')) ? get_field('cta_image_background', 'option') : '';
?>

<section class="cta relative flex bg-black">
    <div  class="z-1  absolute top-0 left-0 w-full h-full bg-black  opacity-60"></div>          
    <img class="[transform:rotateY(180deg)] absolute top-0 left-0 w-full h-full object-cover z-0" 
        src="<?php echo esc_html($cta_image_background); ?>" 
        alt="cta-background">
               
    <div class="page-width z-10">
        <div class="flex flex-row gap-16 items-center">
         
                <div class="max-w-[50%] grow-1">
                    <h2  class="text-white">
                        <?php echo esc_html($cta_heading); ?>
                    </h2>
            

                    <p class="text-white text-xl mt-4">
                        <?php echo esc_html($cta_text); ?>
                    </p>
                </div>
                <div class="flex justify-center items-center gap-4">
                    <a class="z-10 text-white bg-accent button w-max" href="<?php echo esc_url($cta_button_link); ?>">
                        <?php echo esc_html($cta_button_text); ?>
                        <i class="icon-chevron-right before:text-white ml-4 duration-300"></i>
                       
                    </a>
                    <a class="z-10 button text-white border-4 border-white w-max" href="#">
                        Kontakta oss
                        <i class="icon-chevron-right text-white ml-4 duration-300"></i>
                       
                    </a>
                </div>
         
        </div>
    </div>
</section>
</section>