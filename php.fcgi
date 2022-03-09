#!/bin/bash
DEFAULTPHPINI="/home/khlmotot/public_html/php74-fcgi.ini"
exec /opt/cpanel/ea-php74/root/usr/bin/php-cgi -c ${DEFAULTPHPINI}