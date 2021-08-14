#!/bin/sh

docker run -w /root -v "$PWD":/root -it vitalex/design-patterns-factory-method:latest /bin/sh
