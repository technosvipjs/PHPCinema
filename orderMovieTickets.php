<?php
require_once 'php/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src=js/jquery-ui.min.js></script>
	<script type="text/javascript" src=js/functions.js></script>
        <meta charset="UTF-8">
        <title>Movie World</title>
    </head>
    <body>
        <div>Choose a city:</div>
        <input id="myCity" <?php $city; ?> />
        <input type="submit" value="Go!" />
        
    </body>
</html>
