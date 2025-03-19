<?php 
$counters = get_field('counter_repeater');
$button_text = get_field('counter_button_text');
$button_url = get_field('counter_button_url');

if (!empty($counters)): ?>
<section class="bg-light-gray pt-0">
    <div class="page-width">
        <div class="flex justify-around gap-16">
            <?php foreach ($counters as $counter): 
                $counter_number = $counter['counter_number'];
                $counter_text = $counter['counter_text'];
            ?>
                <div class="flex justify-center items-center flex-col">
                    <div class="flex flex-row gap-4 items-center">
                  
                      <div class="counter" data-target="<?php echo esc_attr($counter_number); ?>"> 0</div>
                      <span class="text-primary text-4xl font-bold">+</span>
                    </div>
                    <div class="text-center text-2xl"><?php echo esc_html($counter_text); ?></div>
                </div>
            <?php endforeach; ?>
        </div>

   
    </div>
</section>
<?php endif; ?>
