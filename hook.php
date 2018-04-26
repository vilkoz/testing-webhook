<pre>
<?php
print_r($_SERVER);
print_r($_POST);

file_put_contents("GITHUB_WEBHOOK_LAST_NON_VERIFIED", "here post" . serialize($_POST));
shell_exec("git pull");
if( 'sha1=' . hash_hmac( 'sha1', $postBody, $_ENV['GITHUB_SECRET'], false ) === $_SERVER[ 'HTTP_X_HUB_SIGNATURE' ])
{
	file_put_contents("GITHUB_WEBHOOK_LAST", "here post" . serialize($_POST));
}
?>
</pre>
