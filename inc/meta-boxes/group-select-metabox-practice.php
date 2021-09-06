        <?php
        // Control core classes for avoid errors
        if (class_exists('CSF')) {

            //
            // Set a unique slug-like ID
            $prefix = 'group_select_meta';

            //
            // Create a metabox
            CSF::createMetabox($prefix, array(
                'title' => 'Group Select Meta',
                'post_type' => 'page',
                'page_templates' => 'page-group-select-metabox-practice.php',

            ));

            //
            // Create a section
            //     CSF::createSection( $prefix, array(
            //     'title' => 'group select',
            //     'fields' => array(

            //     //
            //     // A text field
            //     array(
            //     'id'        => 'opt-group-1',
            //     'type'      => 'group',
            //     'title'     => 'Group',
            //     'fields'    => array(
            //         array(
            //         'id'    => 'opt-text',
            //         'type'  => 'text',
            //         'title' => 'Text',
            //         ),
            //         array(
            //         'id'    => 'opt-color',
            //         'type'  => 'color',
            //         'title' => 'Color',
            //         ),
            //         array(
            //         'id'    => 'opt-switcher',
            //         'type'  => 'switcher',
            //         'title' => 'Switcher',
            //         ),
            //         array(
            //         'id'=>'select_post',
            //         'type'=>'select',
            //         'title'=>'Select Post',
            //         'options'=>array(
            //         'banner'=>__('Banner','meal'),
            //         'featured'=>__('Featured Receipes','meal'),
            //         'gallery'=>__('Gallery','meal'),
            //         'chef'=>__('Chef','meal'),
            //         'menu'=>__('Menu','meal'),
            //         'services'=>__('Services','meal'),
            //         'reservations'=>__('Reservation','meal'),
            //         'testimonials'=>__('Testimonials','meal'),
            //         'contact'=>__('Contact','meal'),
            //         ),
            //         ),
            //     ),
            // ),)
            //     ) );

            // Section to show cpt data
            CSF::createSection($prefix, array(
                'name' => 'meal_page_sections_section-one',
                'title' => 'Select Section',
                'icon' => 'fa fa-cog',

                'fields' => array(
                    array(

                        'id' => 'sections_group',
                        'icon' => 'fa fa-puzzle-piece',
                        'title' => __('Select Secton', 'meal'),
                        'type' => 'group',
                        'button_title' => __('New Section', 'meal'),
                        'accordion_title_prefix' => __('Add New Section', 'meal'),
                        'fields' => array(
                            array(
                                'id' => 'section-field',
                                'title' => __('Select Sections', 'meal'),
                                'type' => 'select',
                                'options' => 'post',
                                'query_args' => array(
                                    'post_type' => 'section',
                                    'post_per_page' => -1,

                                ),

                            ),
                            array(
                                'id' => 'text_section',
                                'title' => 'Text Section',
                                'type' => 'text',
                            )



                        ),
                    ),

                )
            ));
        }
