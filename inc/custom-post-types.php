<?php
add_action('init', 'unreal_custom_post_type');
function unreal_custom_post_type(){
    $args_services = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Услуги ', // основное название для типа записи
            'singular_name'      => 'Услуга ', // название для одной записи этого типа
            'add_new'            => 'Добавить услугу ', // для добавления новой записи
            'add_new_item'       => 'Новая услуга', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Услуги', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('services', $args_services );

    $args_barbers = array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Барберы ', // основное название для типа записи
            'singular_name'      => 'Барбер ', // название для одной записи этого типа
            'add_new'            => 'Добавить барбера ', // для добавления новой записи
            'add_new_item'       => 'Новый барбер', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => '', // для редактирования типа записи
            'new_item'           => '', // текст новой записи
            'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
            'search_items'       => '', // для поиска по этим типам записи
            'not_found'          => '', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => '', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Барберы', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => null,
        'show_in_menu'        => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','thumbnail','editor'),
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => true,
    );
    register_post_type('barbers', $args_barbers );
}