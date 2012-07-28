<?//MYSQL CONNEX
$link = mysql_connect('localhost','','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('timepiece');
?>
