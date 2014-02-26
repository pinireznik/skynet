FROM uglyduckling.nl/serf
MAINTAINER Jorrit "j.jong@uglyduckling.nl"

RUN apt-get update
RUN apt-get install -y net-tools apache2

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# Expose 80 for Apache
EXPOSE 80

ADD apache.sh /tmp/apache.sh
ADD www /var/www

CMD bash /tmp/apache.sh
