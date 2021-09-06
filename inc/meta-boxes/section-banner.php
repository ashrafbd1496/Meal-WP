<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'meal_banner_section_metabox';


  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => __('Banner Section','meal'),
    'post_type' => 'section',
  ) );
  
//  $section_id = 0;
    
//     if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
//         $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
//     }
    
    
//     $section_meta = get_post_meta($section_id, 'section_type_meta_box', true);

//     $section_type = $section_meta['select_section_type'] ?? ""; 



    // if($section_type != $field_value[$key]){
    //     echo $section_meta;
    // }

//
// // Create a section
CSF::createSection( $prefix, array(
'name'=>'meal_banner_section-one',
'id'=>'meal_banner',

'fields'=>array(
array(
'id'=>'banner_image',
'title'=>__('Banner Image','meal'),
'type'=>'media',
),
array(
'id'=>'button_title',
'title'=>__('Button Title','meal'),
'type'=>'text',
),
array(
'id'=>'button_target',
'title'=>__('Button Target','meal'),
'type'=>'text',
),

),


) );



}