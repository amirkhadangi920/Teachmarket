<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

    switch($page){
        case 'home-v1':
        case 'home-v2':
            require_once TECH_ROOT. '/inc/header/top-bar-v1.php';
        break;


        case 'home-v3':
        case 'home-v4':
        case 'home-v5':
        case 'home-v6':
        case 'home-v7':
        case 'home-v8':
        case 'home-v11':
        case 'home-v12':
            require_once TECH_ROOT. '/inc/header/top-bar-v2.php';
        break;

        default:
            require_once TECH_ROOT. '/inc/header/top-bar-v1.php';

        
    }
?>
