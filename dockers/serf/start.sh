docker run -v `pwd`:/tmp/restart -d -name node1 uglyduckling.nl/serf
docker run -v `pwd`:/tmp/restart -d -name node2 -link node1:serf uglyduckling.nl/serf
