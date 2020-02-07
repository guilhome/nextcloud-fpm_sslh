# nextcloud-fpm_sslh
Nextcloud FPM with SSLH simple server docker-compose script

### Summary
- [Version](#versions)
- [Installation](#installation)

### Versions

| Name | Version |
| :--: | :-----: |
| shaddysignal/sslh-hub | latest |
| traefik | 2.1.3 |
| nextcloud | 16.0.7-fpm |
| nginx | 1.16.1-alpine |
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
