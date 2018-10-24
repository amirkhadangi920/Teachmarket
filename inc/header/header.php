<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	switch($page){
        case 'home-v1':
            require_once TECH_ROOT. '/inc/header/header-v1.php';
        break;

        case 'home-v2':
         	require_once TECH_ROOT. '/inc/header/header-v1.php';
        break;

        case 'home-v3':
         	require_once TECH_ROOT. '/inc/header/header-v2.php';
        break;

        case 'home-v4':
         	require_once TECH_ROOT. '/inc/header/header-v2.php';
        break;

		case 'home-v5':
         	require_once TECH_ROOT. '/inc/header/header-v3.php';
        break;

		case 'home-v6':
         	require_once TECH_ROOT. '/inc/header/header-v4.php';
        break;

		case 'home-v7':
         	require_once TECH_ROOT. '/inc/header/header-v2.php';
        break;

        case 'home-v8':
            require_once TECH_ROOT. '/inc/header/header-v2.php';
        break;

        case 'home-v9':
            require_once TECH_ROOT. '/inc/header/header-v7.php';
        break;

        case 'home-v10':
            require_once TECH_ROOT. '/inc/header/header-v8.php';
        break;

        case 'home-v11':
            require_once TECH_ROOT. '/inc/header/header-v9.php';
        break;

        case 'home-v12':
            require_once TECH_ROOT. '/inc/header/header-v10.php';
        break;

        case 'home-v13':
            require_once TECH_ROOT. '/inc/header/header-v11.php';
        break;

        case 'home-v14':
            require_once TECH_ROOT. '/inc/header/header-v12.php';
        break;

        case 'landing-page-v1':
            require_once TECH_ROOT. '/inc/header/header-v5.php';
        break;

        case 'landing-page-v2':
            require_once TECH_ROOT. '/inc/header/header-v6.php';
        break;
        
        default:
        	require_once TECH_ROOT. '/inc/header/header-v1.php';
    }
?>
