# nextcloud-fpm_sslh
Nextcloud FPM with SSLH simple server docker-compose script

### Summary
- [Version](#versions)
- [Installation](#installation)
- [Post-Installation](#post-installation)

### Versions

| Name | Version |
| :--: | :-----: |
| shaddysignal/sslh-hub | latest |
| traefik | 2.3.7 |
| nextcloud | 22.2.5-fpm |
| nginx | 1.20.2-alpine |
| mariadb | latest |
| redis | 5.0.4-alpine |

### Installation

#### 1 - Prepare your environment

Create a new docker network for Traefik :
```bash
docker network create proxy-net
```

Pull Docker images :
```bash
docker-compose pull 
```

#### 2 - Edit environment file and Traefik configuration files

Edit the `.env`, `conf/traefik.yml` & `conf/traefik_dynamic_conf.yml` and adapt its to your needs :
```bash
cp sample.env .env
nano .env
cp conf/traefik.sample.yml conf/traefik.yml
nano conf/traefik.yml
cp conf/traefik_dynamic_conf.sample.yml conf/traefik_dynamic_conf.yml
nano conf/traefik_dynamic_conf.yml
```

#### 3 - Launch the server

Start all services :
```
docker-compose up -d
```


### Post-Installation

#### Configuration

Stop all services :
```
docker-compose down
```

Edit config.php file :
```
nano $DATA/nextcloud/config.php
```
$DATA is the variable defined in .env file

Add 'overwriteprotocol' => 'https' parameter at the end of config.php file
