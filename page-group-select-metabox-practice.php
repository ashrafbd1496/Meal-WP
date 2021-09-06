<?php

/**
 * Template Name:Group Select Metabox
 */

get_header();

?>

<div class="section" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">

                <?php
                $group_meta = get_post_meta(get_the_ID(), 'group_select_meta', true);
                $group_data = $group_meta['sections_group'];

                foreach ($group_data as $gd) {

                    echo "<pre>";
                    print_r($group_data);
                    echo "</pre>";

                    echo get_the_title($gd['section-field']);
                    echo "<br/>";
                    echo $gd['text_section'];
                }

                ?>
            </div>

            <div class="col-md-8 text-center">
                <?php
                $meta = get_post_meta( get_the_ID(), 'section_meta_options', true );

                echo $meta_data = isset($meta['type']) ? $options['type'] : '';

              
                ?>

            </div>

        </div>
    </div>
</div> <!-- .section -->


<?php
get_footer();
