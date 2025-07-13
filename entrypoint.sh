#!/usr/bin/env bash

set -e

sed -ri -e "s!mongodb://localhost:27017!${DB_URI}!g" ${APACHE_ROOT}/.env
sed -ri -e "s!database!${DB_DATABASE}!g" ${APACHE_ROOT}/.env

exec "$@"