
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" name="b1" />
        </form>
    </body>
</html>

<?php
    if(isset($_REQUEST["b1"]))
    {
        $i = $_FILES["image"]["name"];
        echo '$i';
    }
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

