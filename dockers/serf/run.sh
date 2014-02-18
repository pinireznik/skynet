docker run -d -name node1 uglyduckling.nl/serf
docker run -d -name node2 -link node1:serf uglyduckling.nl/serf