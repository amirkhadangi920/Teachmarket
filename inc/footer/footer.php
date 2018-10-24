<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	switch($page){

        case 'home-v9':
            require_once TECH_ROOT. '/inc/footer/footer-v5.php';
        break;

        case 'home-v10':
            require_once TECH_ROOT. '/inc/footer/footer-v2.php';
        break;

        case 'home-v11':
            require_once TECH_ROOT. '/inc/footer/footer-v3.php';
        break;

        case 'home-v12':
            require_once TECH_ROOT. '/inc/footer/footer-v4.php';
        break;

        case 'home-v13':
            require_once TECH_ROOT. '/inc/footer/footer-v6.php';
        break;

        case 'home-v14':
            require_once TECH_ROOT. '/inc/footer/footer-v7.php';
        break;
        
        default:
        	require_once TECH_ROOT. '/inc/footer/footer-v1.php';
    }
?>
