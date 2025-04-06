<?php
// Declare all ACF fields at the top of the page
$footer_logo = get_field('footer_logo', 'option');
$quick_links = get_field('footer_quick_links', 'option');
$contact_phone = get_field('contact_phone', 'option');
$contact_email = get_field('contact_mail', 'option');
$opening_hours = get_field('contact_open_times', 'option'); // Repeater for opening hours
?>

<footer class="bg-black text-white px-16 py-24">
    <div class="flex flex-col">
    
    </div>

    <div class="page-width">
        <div class="footer-columns flex gap-4 justify-between flex-row pb-8">

            <!-- Column 1: Logo, Heading, and Opening Hours -->
            <div class="flex flex-col justify-between">
                <?php if (!empty($footer_logo)) : ?>
                    <img class="max-w-[200px]" src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
                <?php endif; ?>
                <a href="https://www.facebook.com/people/Rehns-Gummi-D%C3%A4ckia/100063544212023/" target="blank" >
                  <img class="max-w-[40px] max-h-[40px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="">
                </a>

               
            </div>

            <div>
              <?php if (!empty($opening_hours)) : ?>
                      <h4 class="pb-4">Öppettider</h4>
                      <ul>
                          <?php foreach ($opening_hours as $row) : ?>
                              <li>
                                  <strong><?php echo esc_html($row['opening_day']); ?>:</strong> 
                                  <?php echo esc_html($row['opening_hours']); ?>
                              </li>
                          <?php endforeach; ?>
                      </ul>
                  <?php endif; ?>
            </div>

            <!-- Column 2: Quick Links (using ACF Relationship field) -->
            <div>
                <?php if (!empty($quick_links)) : ?>
                    <ul>
                        <?php foreach ($quick_links as $link) : ?>
                            <li><a class="font-bold uppercase opacity-80 hover:opacity-100 " href="<?php echo esc_url(get_permalink($link->ID)); ?>"><?php echo esc_html(get_the_title($link->ID)); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 3: Contact Info -->
            <div >
                <h4 class="pb-4 ">Kontakt</h4>
                <div class="flex flex-col gap-2">
                  <?php if (!empty($contact_phone)) : ?>
                    <div class="flex flex-row gap-4 items-center">
                      <i class="icon-phone opacity-70 text-white"></i>
                      <a class="hover:underline font-bold" href="tel:<?php echo esc_attr($contact_phone); ?>"><?php echo esc_attr($contact_phone); ?></a>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($contact_email)) : ?>
                    <div class="flex flex-row gap-4 items-center">
                      <i class="icon-mail opacity-70 text-white"></i>
                      <a class="hover:underline duration-300  text-white" href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
                    </div>
                  <?php endif; ?>

                  <div class="flex flex-row gap-4 items-center">
                      <i class="icon-pin opacity-70 text-white"></i>
                      <a class=" hover:underline duration-300  text-white" target="blank" href="https://www.google.com/maps/dir//Rehns+Gummi+AB+-+Autoexperten,+Norrk%C3%B6pingsv%C3%A4gen+5+B,+611+38+Nyk%C3%B6ping/@58.7500126,16.9892174,1624m/data=!3m1!1e3!4m17!1m7!3m6!1s0x465f2d1257f5e8fd:0xfb5f75f8800f98bc!2sRehns+Gummi+AB+-+Autoexperten!8m2!3d58.7500126!4d16.9917923!16s%2Fg%2F1hc7fh3zp!4m8!1m0!1m5!1m1!1s0x465f2d1257f5e8fd:0xfb5f75f8800f98bc!2m2!1d16.9917923!2d58.7500126!3e3?hl=sv&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">Hitta hit</a>
                  </div>
              
                

            </div>
          </div>

        </div>

        <!-- Footer Copyright Section -->
        <div class="border-primary border-t-2 bg-black pt-8">
            <p>&copy; All rights reserved <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
