#!/bin/bash
PHPRC=$DOCUMENT_ROOT/../etc/php7.0
export PHPRC
umask 022
SCRIPT_FILENAME=$PATH_TRANSLATED
export SCRIPT_FILENAME
exec /bin/php-cgi
