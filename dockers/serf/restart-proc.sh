#!/bin/sh

FILENAME_BREAK=/tmp/restart/break.tmp
FILENAME_OVERLOAD=/tmp/restart/load.tmp
while [ true ]
do
   sleep 1
   if [ -f $FILENAME_BREAK ]; then
      echo "Restarting service and removing $FILENAME_BREAK"
      rm $FILENAME_BREAK
      serf event FIXED
   elif [ -f $FILENAME_OVERLOAD ]; then
      echo "Restarting service and removing $FILENAME_OVERLOAD"
      rm $FILENAME_OVERLOAD
      serf event OVERLOADED 
   fi
done
