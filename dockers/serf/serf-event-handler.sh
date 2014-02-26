 #!/bin/bash
if [ "${SERF_USER_EVENT}" = "OVERLOADED" ]; then
        echo "create new container for $SERF_SELF_NAME" >> /tmp/test.txt
        /usr/bin/docker run -d -name node3 -link node1:serf uglyduckling.nl/serf
elif [ "${SERF_USER_EVENT}" = "FIXED" ]; then
        echo "fixed agent $SERF_SELF_NAME" >> /tmp/test.txt
fi
echo "${SERF_USER_EVENT}"
