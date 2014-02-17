#!/bin/bash

echo "Starting Serf agent in background"
bash /tmp/serf.sh &

echo "Starting Apache Service"
/usr/sbin/apache2 -D FOREGROUND

