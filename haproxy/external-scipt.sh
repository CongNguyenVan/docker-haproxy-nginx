#!/bin/sh

server_address=$3

ok=$(curl -k -s http://$server_address:$4/check.php | jq '.ok')
if [ $ok = true ]; then
    exit 0
fi
exit -1
