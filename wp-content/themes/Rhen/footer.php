<?php
// Declare all ACF fields at the top of the page
$footer_logo = get_field('footer_logo', 'option');
$quick_links = get_field('footer_quick_links', 'option');
$contact_phone = get_field('contact_phone', 'option');
$contact_email = get_field('contact_email', 'option');
$opening_hours = get_field('contact_open_times', 'option'); // Repeater for opening hours
?>

<footer class="bg-black text-white p-16">
    <div class="flex flex-col">
        <?php if (!empty($contact_phone)) : ?>
            <i class="icon-phone opacity-70 text-5xl"></i>
            <a class="hover:underline font-bold" href="tel:<?php echo esc_attr($contact_phone); ?>">Hitta hit</a>
        <?php endif; ?>
    </div>

    <div class="page-width">
        <div class="footer-columns flex gap-4 justify-between flex-row pb-8">

            <!-- Column 1: Logo, Heading, and Opening Hours -->
            <div class="flex flex-col">
                <?php if (!empty($footer_logo)) : ?>
                    <img class="max-w-[200px]" src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
                <?php endif; ?>

                <?php if (!empty($opening_hours)) : ?>
                    <h4>Öppettider</h4>
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
                            <li><a class="font-bold opacity-80 hover:opacity-100 " href="<?php echo esc_url(get_permalink($link->ID)); ?>"><?php echo esc_html(get_the_title($link->ID)); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 3: Contact Info -->
            <div>
                <?php if (!empty($contact_phone)) : ?>
                    <h4>Kontakt</h4>
                    <p><strong>Telefon:</strong> <?php echo esc_html($contact_phone); ?></p>
                <?php endif; ?>
                <?php if (!empty($contact_email)) : ?>
                    <p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></p>
                <?php endif; ?>
              
                    <p><strong>Adress:</strong> Norrköpingsvägen 5B - 61138 Nyköping </p>
              
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
