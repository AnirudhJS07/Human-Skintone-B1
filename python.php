<?php

$command = escapeshellcmd('C:\Users\Maadurga computer\AppData\Local\Programs\Python\Python38-32\skin.py');

$output = shell_exec($command);

echo $output;

?>