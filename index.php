<?php
    include 'functions/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Fortune Cookie </title>
        <!--Calling css file-->
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        <header>
            <strong>
                <h1> Fortune Cookie</h1>
                <h2>Find your luck :)</h2>
            </strong>
        </header>
        <div id ="main">
            <?php
               displayCookie();
            ?>
            <form>
                <input type = "submit" value = "Open"/>
            </form>
         </div>
         <footer>
            <figure id="csumb">
                    <img width = "200" height = "150" alt="affective" src = "https://experiencecle.com/wp-content/uploads/2016/03/csumb_logo-1.png"/><br/>
                     CST 336 Internet Programming. 2018© <br/>
                     <strong>Disclaimer:</strong> the information in this webpage is fictitous. <br/>
                     It is used for academic purposes only.
            </figure>
        </footer>
    </body>
</html>