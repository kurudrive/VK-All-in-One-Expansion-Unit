<?php
$required_packages = array();
/*
Example :
$required_packages[] = array(
    'name'  => 'auto_eyecatch',
    'title' => __('Automatic Eye Catch insert', 'vkExUnit'),
    'description' => __('Display Eye Catch image at before content.', 'vkExUnit'),
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_css_customize',
            'enable_only' => 1,
        )
    ),
    'default' => false,
);

*/


/*-------------------------------------------*/
/*  bootstrap
/*-------------------------------------------*/
/*  fontawesome
/*-------------------------------------------*/
/*  icon	
/*-------------------------------------------*/
/*  wpTitle	
/*-------------------------------------------*/
/*  metaDescription	
/*-------------------------------------------*/
/*  metaKeyword	
/*-------------------------------------------*/
/*  sns
/*-------------------------------------------*/
/*  ga
/*-------------------------------------------*/
/*  relatedPosts
/*-------------------------------------------*/
/*  Contact Section
/*-------------------------------------------*/
/*  ChildPageIndex
/*-------------------------------------------*/
/*  Sitemap_page
/*-------------------------------------------*/
/*  Call To Action
/*-------------------------------------------*/
/*  otherWidgets
/*-------------------------------------------*/
/*  css_customize
/*-------------------------------------------*/
/*  auto_eyecatch
/*-------------------------------------------*/
/*  insert_ads
/*-------------------------------------------*/


/*-------------------------------------------*/
/*  bootstrap
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'bootstrap',
    'title' => __('Print Bootstrap css and js', 'vkExUnit'),
    'description' => __('If your using theme has already including Bootstrap, you deactivate this item.', 'vkExUnit'),
    'default' => false
);

/*-------------------------------------------*/
/*  fontawesome
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'fontawesome',
    'title' => __('Print link fontawesome', 'vkExUnit'),
    'description' => __('Print fontawesome link tag to html head.', 'vkExUnit'),
    'default' => false
);

/*-------------------------------------------*/
/*  icon	
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'icon',
    'title' => __('Favicon setting', 'vkExUnit'),
    'description' => __('About favicon.', 'vkExUnit'),
    'default' => true
);

/*-------------------------------------------*/
/*  wpTitle	
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'wpTitle',
    'title' => __('Rewrite the title tag', 'vkExUnit'),
    'description' => __('Print is rewritten by its own rules to html head.', 'vkExUnit'),
    'default' => true
);

/*-------------------------------------------*/
/*  metaDescription	
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'metaDescription',
    'title' => __('Print meta description', 'vkExUnit'),
    'description' => __('Print meta description to html head.', 'vkExUnit'),
    'default' => true
);

/*-------------------------------------------*/
/*  sns
/*-------------------------------------------*/
$deskSns = array();
$settingPage = '<a href="'.admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_sns_options">'.__('Main setting page').'</a>';
$deskSns[] = '<ul>';
$deskSns[] = '<li>'.__('Print og tags to html head.','vkExUnit').'</li>';
$deskSns[] = '<li>'.__('Print twitter card tags to html head.','vkExUnit').'</li>';
$deskSns[] = '<li>'.__('Print social bookmark buttons.','vkExUnit').'</li>';
$deskSns[] = '<li>'.__('Facebook Page Plugin widget.','vkExUnit').'</li>';
$deskSns[] = '<li>'.__('Print Follow me box to content bottom.','vkExUnit').'</li>';
$deskSns[] = '</ul>';
$deskSns[] = '<p>'.sprintf( __( '* You can stop the function separately from the %s.', 'vkExUnit' ), $settingPage ).'</p>';

$required_packages[] = array(
    'name'  => 'sns',
    'title' => __('Social media cooperation', 'vkExUnit'),
    'description' => $deskSns,
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_sns_options',
            'enable_only' => 1,
        )
    ),
    'default' => true
);

/*-------------------------------------------*/
/*  metaKeyword	
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'metaKeyword',
    'title' => __('Print meta Keyword', 'vkExUnit'),
    'description' => __('Print meta Keyword to html head.', 'vkExUnit'),
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_common_keywords',
            'enable_only' => 1,
        )
    ),
    'default' => true
);

/*-------------------------------------------*/
/*  ga
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'ga',
    'title' => 'Google Analytics',
    'description' => __('Print Google Analytics tracking code.', 'vkExUnit'),
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_ga_options',
            'enable_only' => 1,
        )
    ),
    'default' => true
);

/*-------------------------------------------*/
/*  relatedPosts
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'relatedPosts',
    'title' => __('Related posts', 'vkExUnit'),
    'description' => __('Print Related posts lists to post content bottom.', 'vkExUnit'),
    'default' => true
);

/*-------------------------------------------*/
/*  Contact Section
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'contact_section',
    'title' => __('Contact Section', 'vkExUnit'),
    'description' => __('Display Contact Section at after content.', 'vkExUnit'),
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_contact',
            'enable_only' => 1,
        )
    ),
    'default' => true,
);

 /*-------------------------------------------*/
 /*  ChildPageIndex
 /*-------------------------------------------*/

 $required_packages[] = array(
    'name'  => 'childPageIndex',
    'title' => __('Child page index', 'vkExUnit'),
    'description' => __('At the bottom of the specified page, it will display a list of the child page.', 'vkExUnit'),
     'default' => true,
 );


/*-------------------------------------------*/
/*  Sitemap_page
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'sitemap_page',
    'title' => __('Display HTML Site Map', 'vkExUnit'),
    'description' => __('It displays a HTML Site Map to the specified page.', 'vkExUnit'),
    'default' => true,
);

/*-------------------------------------------*/
/*  Call To Action
/*-------------------------------------------*/
$cta_description = __('Display the CTA at the end of the post content.', 'vkExUnit');
$cta_description .= '<br>';
$cta_description .= __('The CTA stands for "Call to action" and this is the area that prompts the user behavior.', 'vkExUnit');
$cta_description .= '<br>';
$cta_description .= __('As an example, text message and a link button for induction to the free sample download page.', 'vkExUnit');

$required_packages[] = array(
    'name'  => 'call_to_action',
    'title' => __('Call To Action', 'vkExUnit'),
    'description' => $cta_description,
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_cta_settings',
            'enable_only' => 1,
        ),
        array(
            'name'=>__('Contents setting','vkExUnit'),
            'url'=> admin_url().'edit.php?post_type=cta',
            'enable_only' => 1,
        )
    ),
    'default' => true,
);

/*-------------------------------------------*/
/*  otherWidgets
/*-------------------------------------------*/
$desk = array();
$desk[] =  '<p>'.__('You can use various widgets.', 'vkExUnit').'</p>';
$desk[] = '<ul>';
$desk[] = '<li>'.__('VK_Recent Posts - display the link text and the date of the latest article title.','vkExUnit').'</li>';
$desk[] = '<li>'.__('VK_Page content to widget - display the contents of the page to the widgets.','vkExUnit').'</li>';
$desk[] = '<li>'.__('VK_Profile - display the profile entered in the widget.','vkExUnit').'</li>';
$desk[] = '<li>'.__('VK_FB Page Plugin - display the Facebook Page Plugin.','vkExUnit').'</li>';
$desk[] = '<li>'.__('VK_3PR area - display the 3PR area.','vkExUnit').'</li>';
$desk[] = '<li>VK_'.__( 'categories/tags list', 'vkExUnit' ).__( 'Displays a categories, tags or format list.', 'vkExUnit' ).'</li>';
$desk[] = '<li>VK_'.__( 'archive list', 'vkExUnit' ).__( 'Displays a list of archives. You can choose the post type and also to display archives by month or by year.', 'vkExUnit' ).'</li>';
$desk[] = '</ul>';

$required_packages[] = array(
    'name'  => 'otherWidgets',
    'title' => __('Widgets', 'vkExUnit'),
    'description' => $desk,
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'widgets.php',
            'enable_only' => 1,
        )
    ),
    'default' => true,
);

/*-------------------------------------------*/
/*  css_customize
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'css_customize',
    'title' => __('CSS customize', 'vkExUnit'),
    'description' => __('You can set Customize CSS.', 'vkExUnit'),
    'attr' => array(
        array(
            'name'=>__('Setting','vkExUnit'),
            'url'=> admin_url().'admin.php?page=vkExUnit_css_customize',
            'enable_only' => 1,
        )
    ),
    'default' => true,
);

/*-------------------------------------------*/
/*  insert_ads
/*-------------------------------------------*/
$required_packages[] = array(
    'name'          => 'insert_ads',
    'title'         => __('Insert ads', 'vkExUnit'),
    'description'   => __('Insert ads to content.', 'vkExUnit'),
    'attr'          => array(
        array(
            'name'  =>__('Setting','vkExUnit'),
            'url'   => admin_url().'admin.php?page=vkExUnit_main_setting#vkExUnit_Ads',
            'enable_only' => 1,
        )
    ),
    'default'          => true,
);

/*-------------------------------------------*/
/*  auto_eyecatch
/*-------------------------------------------*/
$required_packages[] = array(
    'name'  => 'auto_eyecatch',
    'title' => __('Automatic Eye Catch insert', 'vkExUnit'),
    'description' => __('Display Eye Catch image at before content.', 'vkExUnit'),
    'default' => false,
);


foreach( $required_packages as $package ){
    vkExUnit_package_register( $package );
}