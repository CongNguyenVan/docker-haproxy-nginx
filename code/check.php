<?php

$cmd = 'ps auxwww | awk \'{print $12}\' | grep delivery | wc -l';
$result = exec($cmd, $status);
if ($result > 5) {
    echo json_encode(['ok'=> false]);
} else {
    echo json_encode(['ok'=> true]);
}
