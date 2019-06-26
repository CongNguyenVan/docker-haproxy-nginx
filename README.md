# Docker-HAProxy-Nginx-FPM

## Usage

### Install Vitual Box
[Install]

- [Vitual Box](https://www.virtualbox.org/wiki/Downloads)

[Version]
```sh
vboxmanage --version
```

**Note: I'm ussing version 5.1.22r115126**

### Docker Desktop

[Install]

- [Docker For Mac](https://docs.docker.com/docker-for-mac/install/)

[Version]
```sh
docker --version
```
**Note: I'm ussing version 17.12.0-ce, build c97c6d6**

### Docker Compose

```sh
docker-compose --version
```

**Note: I'm ussing version 1.18.0, build 8dd22a9**

### Docker Machine

[Install]

- [Docker Machine](https://docs.docker.com/machine/install-machine/)

[Version]
```sh
docker-machine version
```

**Note: I'm ussing version 0.16.0, build 702c267f**

### Get started with docker machine

**Step 1: List available machines**

```sh
docker-machine ls
```
**Step 2: Create a machine**

```sh
docker-machine create --driver virtualbox default
```
**Step 3: List available machines again to see your newly minted machine**

```sh
docker-machine ls
```
**Step 4: Get the environment commands for your new VM**

```sh
docker-machine env default
```
**Step 5: Connect your shell to the new machine**

```sh
eval "$(docker-machine env default)"
```

`Reference`: https://docs.docker.com/machine/get-started/

**Step 6: Go to docker-haproxy-nginx folder**

```sh
docker-compose up --build -d
```

## How to Test

**We have 4 servers:**
- Server 1: 192.168.99.100:8081 (Normal server)
- Server 2: 192.168.99.100:8082 (Normal server)
- Server 3: 192.168.99.100:8083 (Normal server)
- Server 4: 192.168.99.100:8080 (Proxy server)

**Step 1: Go to browser and type URL like the image as below:**
![alt text](https://raw.githubusercontent.com/CongNguyenVan/docker-haproxy-nginx/master/images/demo.png)

**Note: You can choose any normal server to check**

**Step 2: Run the script request like the image as below:**
![alt text](https://raw.githubusercontent.com/CongNguyenVan/docker-haproxy-nginx/master/images/result.png)

**As you see in the image, the server 1 was the busy process. Therefore, the proxy server was chosen server 2 and server 3.**