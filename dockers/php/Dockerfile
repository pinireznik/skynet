FROM uglyduckling.nl/apache
MAINTAINER Jorrit "j.jong@uglyduckling.nl"

RUN apt-get update
RUN apt-get install -y php5
RUN apt-get install -y libapache2-mod-php5

ADD php.sh /tmp/php.sh
RUN rm -vrf /var/www
ADD www /var/www

CMD bash /tmp/php.sh