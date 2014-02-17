# run as part of serf netwrok
docker run -p 8080:80 -link node1:serf uglyduckling.nl/apache

# run as stand alone
# docker run -p 8080:80 -d uglyduckling.nl/apache