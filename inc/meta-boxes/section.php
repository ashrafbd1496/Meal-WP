<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'section_meta_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => __('Select Section Type','meal'),
    'post_type' => 'section',
    'context' => 'normal',
    'priority' => 'default',
  ) );

  //
//   // Create a section
  CSF::createSection( $prefix, array(
     'name'=>'meal-section-one',
         
        'fields'=>array(
            array(
                
                'id'=>'type',
                'icon'=>'fa fa-puzzle-piece',
                'title'=>__('Select Secton Type','meal'),
                'type'=>'select',
                'options'=>array(
                    'banner'=>__('Banner','meal'),
                    'featured'=>__('Featured Receipes','meal'),
                    'gallery'=>__('Gallery','meal'),
                    'chef'=>__('Chef','meal'),
                    'menu'=>__('Menu','meal'),
                    'services'=>__('Services','meal'),
                    'reservations'=>__('Reservation','meal'),
                    'testimonials'=>__('Testimonials','meal'),
                    'contact'=>__('Contact','meal'),
                ),

            ),
            ),
    
    
  ) );



}