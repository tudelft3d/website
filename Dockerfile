FROM jekyll/jekyll:3.8
MAINTAINER Balázs Dukai <b.dukai@tudelft.nl>

RUN gem install --no-doc parslet && \
    gem install --no-doc htmlentities
