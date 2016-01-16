<html>
    <head></head>
    <body>
        <form method="post" action="">
            feature:<br><input type="text" name="feature" size="30"><br>
            cost:<br><input type="text" name="cost" size="30"><br>
            <input type="submit" name="submit" value="update feature">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $feature=$_POST['feature'];
    $cost=$_POST['cost'];
    echo $feature;
    echo $cost;
}

?>