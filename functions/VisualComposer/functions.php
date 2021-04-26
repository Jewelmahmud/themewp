<?php 

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}



function GisolaIntegrateWithVC() {

// Image Left section --------------------------------------------------------------------------------
    vc_map( array(
        "name"          => __( "Img Left Text Right", "gisola_theme" ),
        "description"   => __("Img and Text section", "gisola_theme" ),
        "base"          => "gisola_imgtext",
        "class"         => "",
        "category"      => __( "Gisola Elements", "gisola_theme"),
        "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
        "params"        => array(
            array(
                "type" => "attach_image",
                "heading" => __( "Image", "gisola_theme" ),
                "param_name" => "img_left_text_right_image",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Title", "gisola_theme" ),
                "param_name" => "img_left_text_right_title",
            ),
            array(
                "type" => "textarea",
                "heading" => __( "Description", "gisola_theme" ),
                "param_name" => "img_left_text_right_description",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Button Text", "gisola_theme" ),
                "param_name" => "img_left_text_right_button_text",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Button URL", "gisola_theme" ),
                "param_name" => "img_left_text_right_button_URL",
            ),
        )
    ) );

// Image right section --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "Text Left Image Right", "gisola_theme" ),
    "description"   => __("Img and Text section", "gisola_theme" ),
    "base"          => "gisola_imgtextright",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "attach_image",
            "heading" => __( "Image", "gisola_theme" ),
            "param_name" => "img_right_text_left_image",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Title", "gisola_theme" ),
            "param_name" => "img_right_text_left_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Description", "gisola_theme" ),
            "param_name" => "img_right_text_left_description",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Button Text", "gisola_theme" ),
            "param_name" => "img_right_text_left_button_text",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Button URL", "gisola_theme" ),
            "param_name" => "img_right_text_left_button_URL",
        ),
    )
) );

// H2 Title and Text section --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "H2 Title and Text", "gisola_theme" ),
    "description"   => __("H2 Title and Text section", "gisola_theme" ),
    "base"          => "gisola_h2_title",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "H2 Title", "gisola_theme" ),
            "param_name" => "h2_section_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Description", "gisola_theme" ),
            "param_name" => "h2_section_description",
        )
    )
) );

// H3 Title and Text section --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "H3 Title and Text", "gisola_theme" ),
    "description"   => __("H3 Title and Text section", "gisola_theme" ),
    "base"          => "gisola_h3_title",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "H3 Title", "gisola_theme" ),
            "param_name" => "h3_section_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Description", "gisola_theme" ),
            "param_name" => "h3_section_description",
        )
    )
) );

// H4 Title and Text section --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "H4 Title and Text", "gisola_theme" ),
    "description"   => __("H3 Title and Text section", "gisola_theme" ),
    "base"          => "gisola_h4_title",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "H4 Title", "gisola_theme" ),
            "param_name" => "h4_section_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Description", "gisola_theme" ),
            "param_name" => "h4_section_description",
        )
    )
) );

// H4 Title and Text section --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "Item List", "gisola_theme" ),
    "description"   => __("Item List section", "gisola_theme" ),
    "base"          => "gisola_item_list",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "List Item", "gisola_theme" ),
            "param_name" => "item_list_1",
        )
    )
) );

// Image and Text Section of Contact Page --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "Image and Text of Contact Page", "gisola_theme" ),
    "description"   => __("Contact Image text button", "gisola_theme" ),
    "base"          => "gisola_imagetext_contact",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "Title", "gisola_theme" ),
            "param_name" => "gosila_contact_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Description", "gisola_theme" ),
            "param_name" => "gosila_contact_description",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Button Text", "gisola_theme" ),
            "param_name" => "gosila_contact_button_text",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Button URL", "gisola_theme" ),
            "param_name" => "gosila_contact_button_url",
        ),
        
        array(
            "type" => "attach_image",
            "heading" => __( "Image", "gisola_theme" ),
            "param_name" => "gosila_contact_image",
        ),
    )
) );


// Contact Information --------------------------------------------------------------------------------
vc_map( array(
    "name"          => __( "Contact Info", "gisola_theme" ),
    "description"   => __("Contact Information", "gisola_theme" ),
    "base"          => "gisola_contact_information",
    "class"         => "",
    "category"      => __( "Gisola Elements", "gisola_theme"),
    "icon"          => get_template_directory_uri()."/assets/img/vcicons/gisola.png",
    "params"        => array(
        array(
            "type" => "textfield",
            "heading" => __( "Contact Section Title", "gisola_theme" ),
            "param_name" => "gosila_contact_info_title",
        ),
        array(
            "type" => "textarea",
            "heading" => __( "Address", "gisola_theme" ),
            "param_name" => "gosila_contact_info_address",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Telephone T", "gisola_theme" ),
            "param_name" => "gosila_contact_info_telephone_1",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Telephone F", "gisola_theme" ),
            "param_name" => "gosila_contact_info_telephone_2",
        ),
        array(
            "type" => "textfield",
            "heading" => __( "Email", "gisola_theme" ),
            "param_name" => "gosila_contact_info_email",
        ),
        
    )
) );


}
add_action( 'vc_before_init', 'GisolaIntegrateWithVC' );
