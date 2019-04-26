# nextcloud-fpm_sslh
Nextcloud FPM with SSLH simple server docker-compose script

### Summary
- [Version](#versions)
- [Installation](#installation)

### Versions

| Name | Version |
| :--: | :-----: |
| shaddysignal/sslh-hub | latest |
| traefik | 1.7-alpine |
| nextcloud | 15.0.7-fpm |
| nginx | 1.14.2-alpine |
| mariadb | latest |
| refis | 5.0.4-alpine |

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

#### 2 - Edit environment file and Traefik configuration file

Edit the `.env` and `conf/traefik.toml` and adapt to your needs
```bash
cp sample.env .env
nano .env
cp conf/traefik.sample.toml conf/traefik.toml
nano conf/traefik.toml
```

#### 3 - Launch the server

Start all services :
```
docker-compose up -d
```
