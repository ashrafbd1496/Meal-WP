<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {


  //
  // Set a unique slug-like ID
  $prefix = 'meal_section_picker_metabox';

  // $page_id = 0;
    // if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
    //     $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    // }

    // $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    // if ( ! in_array( $current_page_template, array( 'page-templates/landing.php' ) ) ) {
    //     return $metaboxes;
    // }
    
  
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => __('Sections','meal'),
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'page_templates' => array('page-templates/landing.php'), // Spesific page templates

  ) );


  //
//   // Create a section
  CSF::createSection( $prefix, array(
     'name'=>'meal_page_sections_section-one',
       
        'fields'=>array(
            array(
                
                'id'=>'sections',
                'icon'=>'fa fa-puzzle-piece',
                'title'=>__('Select Secton','meal'),
                'type'=>'group',
                'button_title'=>__('New Section','meal'),
               'accordion_title_prefix'=>__('Add New Section','meal'),
                'fields'=>array(
                    array(
                        'id'=>'section-field',
                        'title'=>__('Select Sections','meal'),
                        'type'=>'select',
                        'options'=>'post',
                        'query_args'=>array(
                            'post_type'=>'section',
                            'post_per_page'=>-1,

                        ),
                        
                    ),
                    ),
              
                

            ),
            ),
    
    
  ) );




}