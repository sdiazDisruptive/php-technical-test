<?php 
	session_start();
    $funnel_sponsor = (empty($_GET['sp'])) ? NULL : $_GET['sp'];
	$user_replica = NULL;
	if(!empty($funnel_sponsor)){
		$user_replica = $funnel_sponsor;	
	}
	else{
		$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$uri_segments = explode('/', $uri_path);
		$user_replica = isset($uri_segments[1]) ? $uri_segments[1] : NULL;
		$user_replica = empty($user_replica) ? 'admin' : $user_replica;	
	}
	$_SESSION['user_replica'] = $user_replica;

    include_once("./includes/head.php");
    
    $siteState = NULL; //soon -> para coming soon; NULL -> para sitio en vivo;
    $pages_dir = 'pages';

    switch ($siteState) {
        case 'soon':
            if(!isset($_GET['d'])){
                include_once($pages_dir.'/soon.inc.php');
            } else {
                if(!empty($_GET['p'])){
        
                    $pages = scandir ($pages_dir, 0);
                    unset ($pages[0], $pages[1]);
                    $p = $_GET['p'];
            
                    if (in_array($p.'.inc.php', $pages)){
                        include_once("./includes/header.php");
                        include_once($pages_dir.'/'.$p.'.inc.php');
                        include_once("./includes/footer.php");
                    }else{
                        include_once($pages_dir.'/404.inc.php');
                    }
                } else {
                    include_once("./includes/header.php");
                    include_once($pages_dir.'/home.inc.php');
                    include_once("./includes/footer.php");
                }
            }
            break;
        
        default:
            if(!empty($_GET['p'])){
            
                $pages = scandir ($pages_dir, 0);
                unset ($pages[0], $pages[1]);
                $p = $_GET['p'];
        
                if (in_array($p.'.inc.php', $pages)){
                    include_once("./includes/header.php");
                    include_once($pages_dir.'/'.$p.'.inc.php');
                    include_once("./includes/footer.php");
                }else{
                    include_once($pages_dir.'/404.inc.php');
                }
            } else {
                include_once("./includes/header.php");
                include_once($pages_dir.'/home.inc.php');
                include_once("./includes/footer.php");
            }
    }

    include_once("./includes/endBody.php");
?>