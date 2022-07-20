<?php

function addAdminMenu(){
    add_action('admin_menu', 'setAdminMenu' );
}

function setAdminMenu() {
    $root_url = "eight-rooms";
    $path_menu_root = $root_url.'/page_settings-ldap.php';
    $path_menu_settings_ldap = $path_menu_root;
    $path_menu_attribute = $root_url.'/page_attribute.php';
    $path_menu_backup = $root_url.'/page_backup.php';

    add_menu_page('Eight-Rooms', 'Eight-Rooms', 'manage_options', $path_menu_root, '', 'dashicons-phone' );

    if ( function_exists ( 'add_menu_page' ) ) {
        add_submenu_page($path_menu_root, 'Настройка LDAP', 'Настройка LDAP', 'manage_options', $path_menu_settings_ldap);
        add_submenu_page($path_menu_root, 'Атрибут LDAP ', 'Атрибут LDAP', 'manage_options', $path_menu_attribute);
        add_submenu_page($path_menu_root, 'Backup', 'Резервное копирование', 'manage_options', $path_menu_backup);
    }
}