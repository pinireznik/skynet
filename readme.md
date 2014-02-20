![alt text](http://uglyduckling.nl/email/maillogo.jpg "http://uglyduckling.nl")

# Ugly Duckling DNA prototype

## Getting started

Run dockers\build.sh all to build all the containers. To reproduce demo run monitordemo.sh. The demo video
can be found here

## Introduction

This project consists of set of Dockers that use Serf agents to comunicate with each other.
Each folder contains:

 - build.sh
 - start.sh (starts the container(s))
 - stop.sh (stops container) 

In some case there are additional scripts to make your live easier
 - restart.sh (stops any running and than starts)
 - rebuild.sh (executes stop, build, run  this can be handy when working 
 on code running inside container)

Build creates the Docker image (this could take a while when first run as large downloads
maybe needed). Run starts an instance of container(s). Stop stops and removes the instances.

## Current Models

### Serf
This is the based image that has the Serf agent inside all others are build upon this 
image (directly or indirectly). Any general messaging logic should go here.

### Apache
This image has basic Apache inside.

### Php
Add php to Apache

### Monitor
 The monitor is a php script that shows the messages being send over the network for now. 
 (Maybe later we can add the status of all machines.)

## Planned projects:
 - Load Balancer
 - Creator