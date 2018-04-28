<?php
include_once("Parsedown.php");
if (isset($_POST) && isset($_POST['text']))
{
	$parser = new Parsedown;
	//echo $parser->text($_POST['text']);
	echo $parser->text(file_get_contents("https://gist.githubusercontent.com/vilkoz/73588f8a7b9122a93c369502d61fd922/raw/5424ef173d6497fcf324a0e12c8cb44594883165/setup_http_server_on_android_with_termux.md"));
}
?>
<form method="post" action="/test.php">
	<textarea name="text"></textarea>
	<input type="submit" name="send" value="send">
</form>
