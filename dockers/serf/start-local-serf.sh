#!/bin/bash

if [ "$1" != "" ]; then
    echo "Starting local serf agent..."
    ./serf agent -join $1 -event-handler=`pwd`/serf-event-handler.sh
else
    echo "$0 <IP of a serf agent>"
fi
