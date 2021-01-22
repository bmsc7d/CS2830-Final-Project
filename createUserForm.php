<?php
header("Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0, s-maxage=0");
header("Pragma:no-cache");
header("Expires: 0");
?>

<!DOCTYPE html>
<!-- 
    Name: Brendan Spinks
    Pawprint: bmsc7d
    Date:5/10/19
    Final Project 
-->

<html lang="en">
    <head>
    	<meta charset="utf-8">
        <title>Bmsc7dFinalProject</title>
        <link rel="stylesheet" type="text/css" href="app.css">
        <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <script src="Bmsc7d.js"></script> 
        <script>
            $(function(){
               $("input[type=submit]").button(); 
            });
        </script>
    </head>
    <body>
        <?php
            require_once('navbar.php');
        ?>
        
        <div id="loginWidget" class="ui-widget">
        
       <h1 class="ui-widget-header"> Create User</h1> 
        <?php
          if ($error) {
              print "<div class=\"ui-state-error\">$error</div>\n";
          }  
            if ($success){
                print "<div class=\"ui-state-highlight\">$error</div>\n";
            }
            
        ?>
            
            <form action="createUser.php" method="post">
            
            <input type="hidden" name="action" value="do_create">
                <div class="stack">
                    <label for="Username">Username:</label>
                    <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>"/>
                </div>
            
                <div class="stack">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all"/>
                </div>
            
                <div class="stack">
                    <label for="password">Confirm Password:</label>
                    <input type="password" id="confirmPass" name="confirmPass" class="ui-widget-content ui-corner-all"/>
                    
                </div>
                
                <div class="stack">
                    <input type="submit" value="Submit"/>
                </div>
            </form>
        
        
        </div>
        
    </body>
</html>