<?php

$sleep = $_GET['sleep'];
$thread = $_GET['thread'];
for ($i = 0; $i < $thread; $i++) {
    system("sh ./delivery.sh $sleep > /dev/null 2>&1 &");
}
echo "Completed";
