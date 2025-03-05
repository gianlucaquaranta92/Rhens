<section class="services-block">
    <div class="page-width">
        <div>
            <div class="flex flex-row flex-wrap items-center gap-4">
                <?php if( have_rows('services_repeater') ): ?>
                    <?php foreach( get_field('services_repeater') as $service ): 
                        $service_title = $service['service_title'];
                        $service_description = $service['service_description'];
                        $service_image = $service['service_image']; 
                        $service_link = $service['service_url'];
                    ?>
                        <a href="<?php echo esc_url($service_link); ?>" class="text-white aspect-square min-h-[200px] overflow-hidden group relative shadow-md p-8 grow max-w-[32%] w-full flex justify-end flex-col gap-4  transition-transform duration-300 h-[]">
                            <div class="overlay-container">
                                <div class="red-overlay ">
                                </div>
                                <h4 class="z-10 text-3xl  duration-300"><?php echo esc_html($service_title); ?></h4>
                                <p class="text-lg" ><?php echo esc_html($service_description); ?></p>
                            </div>
                 
                            <img class="absolute top-0 left-0 w-full h-full z-[-10]  duration-300 object-cover " src="<?php echo esc_html($service_image); ?>" alt="hero-image" />
                            <p class="read-more z-10 text-xl  font-bold duration-300">Läs mer →</p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

