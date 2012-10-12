<?php


echo 'Hello Welcome Developer<br>';

echo 'Im going to be updating this server with a git pull request.';

$output = shell_exec('git log');
echo "<pre>$output</pre>";

?>
