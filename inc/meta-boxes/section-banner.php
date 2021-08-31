<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'meal_banner_section_metabox';
  //
  $section_meta = get_post_meta( get_the_ID(), 'meal-section-type', true );
  $section_type = $section_meta['type'];
  if('banner' !=$section_type){
      echo $prefix;
  }


  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'id'=>'meal_banner_section',
    'title'     => __('Banner Section','meal'),
    'post_type' => 'section',
  ) );

  //
//   // Create a section
  CSF::createSection( $prefix, array(
     'name'=>'meal_banner_section-one',

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
