FROM trafex/php-nginx:latest
LABEL author="zaphkiel"

WORKDIR /var/www/html

# Copy your PHP files to the web server directory
COPY . /var/www/html

# Command to start the server
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
