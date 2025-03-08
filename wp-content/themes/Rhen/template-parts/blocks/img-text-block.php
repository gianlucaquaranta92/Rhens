<?php
$section_image = !empty(get_field('img_n_text_section_image')) ? get_field('img_n_text_section_image') : '';
$subheading = !empty(get_field('img_n_text_subheading')) ? get_field('img_n_text_subheading') : '';
$section_title = !empty(get_field('img_n_text_section_title')) ? get_field('img_n_text_section_title') : '';
$description = !empty(get_field('img_n_text_description')) ? get_field('img_n_text_description') : '';
$bold_statement = !empty(get_field('img_n_text_bold_statement')) ? get_field('img_n_text_bold_statement') : '';
$button_text = !empty(get_field('img_n_text_button_text')) ? get_field('img_n_text_button_text') : '';
$button_url = !empty(get_field('img_n_text_button_url')) ? get_field('img_n_text_button_url') : '';
?>

<section >
    <div class="page-width">
        <div class="flex gap-8">
            <?php if ($section_image): ?>
                <img class="max-w-[50%] grow" src="<?php echo esc_url($section_image); ?>" alt="business-woman">
            <?php endif; ?>
            <div class="grow max-w-[50%] flex flex-col gap-8 justify-center">
                <div>
                    <?php if ($subheading): ?>
                        <h5 class="pl-4 pb-4 font-bold uppercase text-base relative before:content-[''] before:absolute before:bg-primary before:w-[5px] before:h-[18px] before:top-[4px] before:left-0"><?php echo esc_html($subheading); ?></h5>
                    <?php endif; ?>
                    <?php if ($section_title): ?>
                        <h2><?php echo esc_html($section_title); ?></h2>
                    <?php endif; ?>
                </div>
                
                <?php if ($description): ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <?php if ($bold_statement): ?>
                    <p class="font-bold"><?php echo esc_html($bold_statement); ?></p>
                <?php endif; ?>

                <?php if ($button_text && $button_url): ?>
                    <a class="button w-max" href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
