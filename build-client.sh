#!/bin/bash

rm -rf src
rm -rf vendor
rm -rf docs
rm -rf composer.lock
swagger-codegen generate \
  -i https://api.swaggerhub.com/apis/chrishemmings/Electio/1.0.5 \
  -l php \
  -o ../electio \
  -c ./swagger-config.json

#composer install
sed -i "" 's/virtserver.swaggerhub.com\/chrishemmings\/Electio\/1.0.0/api.electioapp.com/g' src/Client/Api/*.php
