FROM node:8.7.0-alpine

RUN apk update && apk upgrade
RUN npm install yarn -g

ENV HOME=/app
WORKDIR $HOME
