#!/usr/bin/env bash

set -e

sed -ri -e "s!mongodbhost!${DB_URI}!g" ${APACHE_ROOT}/.env

exec "$@"
