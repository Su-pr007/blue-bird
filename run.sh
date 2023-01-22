#!/bin/bash

docker run -it --rm --name node -v "$PWD/www":/home/node/app -w /home/node/app node:10.24.1-alpine npm install

docker-compose up -d
