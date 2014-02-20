#!/bin/bash

# this script assumes all containers have been build. If this is not the case
# they can be (re)build using dockers\buildall.sh

MONITOR_PORT=99

# clean up any running and/or existing serf demo agents
docker kill node1
docker rm node1
docker kill node2
docker rm node2

# clean up any running and/or existing monitors
docker kill monitor
docker rm monitor

# start first node in serf netwrok
docker run -d -name node1 uglyduckling.nl/serf

# add second node in network 
# use docker -link to share env variable between containers
# env variable is used in  "> serf agent -join" command
docker run -d -name node2 -link node1:serf uglyduckling.nl/serf

# start monitoring
docker run -p $MONITOR_PORT:80 -name="monitor" -d uglyduckling.nl/monitor 

# open browser with monitor-page
URL=http://localhost:$MONITOR_PORT
echo opening $URL in browser... 
bash xdg-open $URL &