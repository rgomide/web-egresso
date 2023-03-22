#!/bin/bash

# Installing dependencies
npm install;
# Starting application
php-fpm & npx mix watch;
