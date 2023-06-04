<?php
    include_once 'model/pdo.php';
    include_once 'global.php';
    include_once 'model/sanpham.php';
    include_once 'model/danhmuc.php';
    include_once 'views/header.php';
    $spnew = load_all_sp_home();
    $dsdm = load_all_dm();
    $top10 = load_all_sp_top10();
    if((isset($_GET['url']))&&($_GET['url']!="")){
        $url = $_GET['url'];
        switch ($url) {
            case 'introduce':
                include_once 'views/introduce.php';
                break;

            case 'contact':
                include_once 'views/contact.php';
                break;

            case 'feedback':
                include_once 'views/feedback.php';
                break;

            case 'hoidap':
                include_once 'views/hoidap.php';
                break;
            
            case 'sanphamct':   
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = load_one_sp($id);
                    include_once 'views/sanphamct.php';
                }else{
                    include_once 'views/home.php';
                }
                break;
            
            default:
                include_once 'views/home.php';
                break;
        }
    }else{
        include_once 'views/home.php';
    }
    include_once 'views/footer.php';


?>