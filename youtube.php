<form method="get" action="youtube.php">
URL<input type="text" name="url">
<input type="submit">
</form>
<?php
if(isset($_GET["url"]))
{
$connect = file_get_contents($_GET["url"]);
preg_match_all('|<meta property="og\:video\:tag" content="(.+?)">|si', $connect, $tags, PREG_SET_ORDER);
foreach ($tags as $tag) {
    echo $tag[1] . "<br>";
}
}
?>