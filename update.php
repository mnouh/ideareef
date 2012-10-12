<?php


echo 'Hello Welcome Developer<br>';

echo 'Im going to be updating this server with a git pull request.';

$output = shell_exec('git pull');
echo "<pre>$output</pre>";

?>
