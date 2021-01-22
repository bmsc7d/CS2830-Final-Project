<?php

    if(!session_start()) {
        header("Location: error.php");
        exit;
    }

    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];


    // code https://stackoverflow.com/questions/15963757/how-to-set-current-page-active-in-php
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array); 
        
        if($current_page == $url){
            echo 'active'; //class name in css 
        }
//        } else if ('' == $url){
//            echo 'active';
//        }
    
    }

?>

<ul>
        <li><a href="index.php" class="<?php active('index.php');?>">Home</a></li>    
        <li><a href="rocky.php" class="<?php active('rocky.php');?>">Rocky Mountains</a></li>
        <li><a href=arches.php class="<?php active('arches.php');?>">Arches</a></li>
        <li><a href="sandDunes.php" class="<?php active('sandDunes.php');?>">Sand Dunes</a></li>
        <?php
            if ($loggedIn){
                echo '<li><a href="logout.php">Logout</a><li>';
            }
            else {
                echo '<li><a href="login_form.php">Login</a><li>';
            }
    
        ?>
</ul>