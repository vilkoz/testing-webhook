<pre>
<?php
print_r($_SERVER);

if( 'sha1=' . hash_hmac( 'sha1', $postBody, $_ENV['GITHUB_SECRET'], false ) === $_SERVER[ 'HTTP_X_HUB_SIGNATURE' ])
{
	echo "super secret data!";
	file_put_contents("GITHUB_WEBHOOK_LAST", "here post" + implode($_POST))
}
?>
</pre>
