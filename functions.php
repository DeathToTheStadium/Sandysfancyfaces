<?php

// Navigation 

if (! function_exists('Navigation')) 
{
    function Navigation()
    {
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
            'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
        ) );
    }
}


//  Dynamic_Widgets_Area

if ( !function_exists('Dynamic_Widgets_Area')) 
{
    function Dynamic_Widgets_Area()
    {
        // Class Names

        $row = "container";

        register_sidebar( array(
            'name'=>esc_html__( "Section_area-1", "Sandyswebsite" ),
            'id' =>'section-1',
            'description' =>esc_html__("this is the first section in your theme", "Sandyswebsite"),
            'before_widget' =>'<section class='.$row.'>',
            'after_widget' =>'</section',
            'before_title' =>'',
            'after_title' =>'',
        ) );

        register_sidebar( array(
            'name'=>esc_html__( "Section_area-2", "Sandyswebsite" ),
            'id' =>'section-2',
            'description' =>esc_html__("this is the first section in your theme", "Sandyswebsite"),
            'before_widget' =>'<section class='.$row.'>',
            'after_widget' =>'</section>',
            'before_title' =>'',
            'after_title' =>'',
        ) );

        register_sidebar( array(
            'name'=>esc_html__( "Section_area-3", "Sandyswebsite" ),
            'id' =>'section-3',
            'description' =>esc_html__("this is the first section in your theme", "Sandyswebsite"),
            'before_widget' =>'<section class='.$row.'>',
            'after_widget' =>'</section',
            'before_title' =>'',
            'after_title' =>'',
        ) );
    }
    add_action( "Dynamic_Widgets_Area", Dynamic_Widgets_Area());
}

//  Enques styles 
if( !function_exists('Enque_StyleSheet'))
{
    function Enque_StyleSheet()
    {
        wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css',false,'1.1','all');
    }
    
    add_action( "Enque_StyleSheet", Enque_StyleSheet() );
}

//  Enques javscript
if( !function_exists('Enque_StyleSheet'))
{
    function Enque_StyleSheet()
    {
        wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css',false,'1.1','all');
    }
    
    add_action( "Enque_StyleSheet", Enque_StyleSheet() );
}


?>