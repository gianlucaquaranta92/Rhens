<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class=" bg-white">
    <div class="flex justify-between items-center w-full px-16 max-w-[1570px] mx-auto ">
        <a href="/cqxlux" class="logo" >
          
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/rehnslogo2.png" alt="Logo">

        </a>
        <div class="flex flex-row justify-between items-center gap-8">
            <div class="flex flex-row gap-4">
                <i class="icon-mail opacity-70  text-5xl "></i>
                <div class="flex flex-col ">
                    <div class="uppercase opacity-70 font-bold">kontakta oss</div>
                    <a class="text-primary hover:underline font-bold" href="mailto:info@rehnsgummi.se">info@rehnsgummi.se</a>
                </div>
            </div>  
            <div class="flex flex-row gap-4">
            <i class="icon-phone opacity-70  text-5xl"></i>
                <div class="flex flex-col">
                    <div class="uppercase opacity-70 font-bold">Ringa oss</div>
                    <a class="text-primary hover:underline font-bold" href="tel:+46155221000">+46155221000</a>
                </div>
            </div>  


            <a class="button bg-[#464646] text-white uppercase " href="">Boka tid
                 <i class="icon-chevron-right text-white ml-4 duration-300"></i>
            </a>
        </div>

    </div>
</header>
<div class="bg-black ">
    <div class="flex justify-between items-center w-full px-16 max-w-[1570px] mx-auto ">
   
        <div class="flex flex-row justify-between items-center gap-8">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'menu_class'     => 'nav-menu', 
                'container'      => 'nav',      
            ]);
            ?>
        </div>

    </div>

</div>
