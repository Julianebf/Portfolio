# Portfolio
# Portfolio
Docker Version 3.3
- Para instalar o Docker na sua maquina (unbutu 20.4): Digite no terminal o passo á passo
1. sudo apt update
2. sudo apt install apt-transport-https ca-certificates curl software-properties-common
3. curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
4. sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
5. sudo apt update
6. apt-cache policy docker-ce
7. sudo apt install docker-ce
8. sudo systemctl status docker
Resultado deve ser:
Output
● docker.service - Docker Application Container Engine
    Loaded: loaded (/lib/systemd/system/docker.service; enabled; vendor preset: enabled)
    Active: active (running) since Tue 2020-05-19 17:00:41 UTC; 17s ago
TriggeredBy: ● docker.socket
      Docs: https://docs.docker.com
  Main PID: 24321 (dockerd)
     Tasks: 8
    Memory: 46.4M
    CGroup: /system.slice/docker.service
            └─24321 /usr/bin/dockerd -H fd:// --containerd=/run/containerd/containerd.sock
Obs: Verifique as portas indicadas no arquivo override.yml e exclua a palavra example do nome do arquivo, para que o projeto possa funcionar. Atualizar o yml com os dados de senha para banco de dados.
Para iniciar os containers:
docker-composer up -d
Para verificar:
docker ps
Para visualizar o projeto no browser, digite a url:
localhost:8082