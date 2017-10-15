# Megane Wordpress Dockerized Website

This is the dockerized version of the megane.life website contained on a dockerfile.

## Techology Invlovled

I've created a [docker deployment repo for wordpress](https://github.com/abarcenas29/wordpress-deploy) that contains the necessary information 

## Usage

This repo is setup to be used locally or deployed to a webserver that has docker installed.

### Preparing for deployment
this container already has node and composer installed to build the files for production. Just run

`./setup.sh`

*Note: If you want to run this locally. Locally install composer and node and run the command from there.*

### Running on local
to run this site on local, you need to have docker installed on your machine. You also need to make sure that port 80 in your machine is unused. If you are running XAMPP or any other similar programs that uses port 80, you may need to close them before using this.

to run it:

`./docker-dev.sh`

to view it go to your browser:

`http://www.megane.local`

*Note: You need to configure your host file to have www.megane.local*

### Running on Production
Be sure your server has docker installed. This container is built to connect to a centralized nginx container for scaling purposes. Particular if you want to run multiple websites on one server. As a pre-requiste, you need to create a network that will bridge the different containers together.

`docker network create nginx`

*Note: `nginx` here can be anything. but for this particular instance, it is named nginx*

Once that's done

`./docker.prod.sh`

### Setting up your Nginx central server
This is broad and not a scope of this. But for reference, [See Here](https://stackoverflow.com/questions/27912917/how-to-configure-docker-port-mapping-to-use-nginx-as-an-upstream-proxy) for insight.
