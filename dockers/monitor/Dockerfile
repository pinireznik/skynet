FROM uglyduckling.nl/php
MAINTAINER Jorrit "j.jong@uglyduckling.nl"

RUN apt-get update
RUN apt-get install -y arp-scan
RUN chmod u+s /usr/bin/arp-scan

ADD monitor.sh /tmp/monitor.sh
RUN rm -vrf /var/www
ADD www /var/www

CMD bash /tmp/monitor.sh