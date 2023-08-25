# Using PHP-NGINX base image by trafex
FROM trafex/php-nginx:latest

# Set some info
LABEL author="zaphkiel"
LABEL Maintainer="Prakash4844 <pk484442@gmail.com>"
LABEL Description="Dressingnity Lightweight container with Nginx 1.22 & PHP 8.1, sqlite3 based on Alpine Linux."

# Switching to root user for package insallations
USER root

# Adding dependencies
RUN apk add --no-cache \
    php82-sqlite3 \
    php82-pdo_sqlite

# Setup document root
WORKDIR /var/www/html

# Switch to use a non-root user from here on
USER nobody

# Add application
COPY --chown=nobody . /var/www/html/

# Expose the port nginx is reachable on
EXPOSE 8080
EXPOSE 80

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
