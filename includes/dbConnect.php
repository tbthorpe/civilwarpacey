<?php
$link = mysql_connect("localhost","root","newyork");
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('bocce', $link);


?>