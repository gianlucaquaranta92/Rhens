<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class=" bg-white">
    <div class="flex justify-between items-center w-full px-16 max-w-[1570px] mx-auto ">
        <a href="/rhens" class="logo" >
          
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/rehnslogo2.png" alt="Logo">

        </a>
        <div class="flex flex-row justify-between items-center gap-8">
            <div class="flex flex-row justify-between items-center gap-8">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'nav-menu', 
                    'container'      => 'nav',      
                ]);
                ?>
            </div>


            <a class="button bg-[#464646] text-white uppercase " href="">Boka tid
                 <i class="icon-chevron-right text-white ml-4 duration-300"></i>
            </a>
        </div>

    </div>
</header>
<div class="bg-black ">
    <div class="flex justify-end items-center w-full px-16 max-w-[1570px] mx-auto gap-4"> 
        <div class="flex flex-row gap-4 p-4 items-center">
            <i class="icon-mail opacity-70 text-white"></i>
            <a class=" hover:underline duration-300  text-white " href="mailto:info@rehnsgummi.se">info@rehnsgummi.se</a>
        </div>

        <div class="flex flex-row gap-4 p-4 items-center">
            <i class="icon-pin opacity-70 text-white"></i>
            <a class=" hover:underline duration-300  text-white " href="https://www.google.com/maps/dir//Rehns+Gummi+AB+-+Autoexperten,+Norrk%C3%B6pingsv%C3%A4gen+5+B,+611+38+Nyk%C3%B6ping/@58.7500126,16.9892174,1624m/data=!3m1!1e3!4m17!1m7!3m6!1s0x465f2d1257f5e8fd:0xfb5f75f8800f98bc!2sRehns+Gummi+AB+-+Autoexperten!8m2!3d58.7500126!4d16.9917923!16s%2Fg%2F1hc7fh3zp!4m8!1m0!1m5!1m1!1s0x465f2d1257f5e8fd:0xfb5f75f8800f98bc!2m2!1d16.9917923!2d58.7500126!3e3?hl=sv&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">Hitta hit</a>
        </div>
    </div>

</div>
