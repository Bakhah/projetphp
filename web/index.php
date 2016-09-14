<!DOCTYPE html>
<html>
<body>

<h1>PROJET</h1>

<?php
echo "Projet de Louis Lalleau et Franck Hourdin";
?>
<?php
$url = parse_url(getenv("mysql://b1e7da43505e81:c262d860@us-cdbr-iron-east-04.cleardb.net/heroku_ac34ed3693a91e3?reconnect=true
"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>

</body>
</html>
