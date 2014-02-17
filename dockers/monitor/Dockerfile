FROM uglyduckling.nl/php
MAINTAINER Jorrit "j.jong@uglyduckling.nl"

ADD monitor.sh /tmp/monitor.sh
RUN rm -vrf /var/www
ADD www /var/www

CMD bash /tmp/monitor.sh