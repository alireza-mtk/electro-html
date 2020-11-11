<?php 
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';

	switch($page){
        case 'home':
            require_once ELECTRO_ROOT. '/inc/header/header-v1.php';
        break;
        case 'home-v2':
         	 require_once ELECTRO_ROOT. '/inc/header/header-v2.php';
        break;
        case 'home-v3':
         	 require_once ELECTRO_ROOT. '/inc/header/header-v3.php';
        break;
        case 'home-v3-full-color':
             require_once ELECTRO_ROOT. '/inc/header/header-v3-full-color.php';
        break;
        default: 
        	require_once ELECTRO_ROOT. '/inc/header/header-v2.php';
    	}
 ?>