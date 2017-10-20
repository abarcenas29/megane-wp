FROM node:7.10.1-alpine

RUN apk update && apk upgrade
RUN npm install yarn -g

ENV HOME=/app
WORKDIR $HOME
