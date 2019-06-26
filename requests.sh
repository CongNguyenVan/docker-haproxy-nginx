#!/bin/sh

for i in $(seq 1 6);
do
  response=$(curl -I http://$(docker-machine ip):8080 | grep -Fi X-Server)
  echo $response
done
