FROM ubuntu
MAINTAINER Jorrit "j.jong@uglyduckling.nl"

RUN echo deb http://archive.ubuntu.com/ubuntu precise universe >> /etc/apt/sources.list
RUN apt-get update

RUN apt-get install -y unzip lsb-release wget ca-certificates supervisor

# add serf configuration
ADD serf.sh /tmp/serf.sh

# Download and install Serf
RUN wget -O /tmp/serf.zip https://dl.bintray.com/mitchellh/serf/0.4.1_linux_amd64.zip
RUN unzip /tmp/serf.zip -d /tmp
RUN mv /tmp/serf /usr/local/bin/serf

ADD /supervisord-restart.conf /etc/supervisor/conf.d/supervisord-restart.conf
ADD /restart-proc.sh /restart-proc.sh

# Expose Serf
EXPOSE 7946

# Run wrapper for serf
CMD bash /tmp/serf.sh
