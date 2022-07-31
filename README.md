# Seb

Arrêter le serveur local MariaDB

```
$ mariadb-admin shutdown -u root -p
```

Exemple de configuration d'un fichier docker-compose pour la création d'un conteneur virtualisant un serveur MariaDB

```YAML
# document-compose.yml

version: '3'
services:
###> doctrine/doctrine-bundle ###
  database:
    container_name: database
    image: mariadb:10.8.3
    ports:
      - 3306:3306
    volumes:
      - ~/apps/mariadb:/var/lib/mysql
    environment:
      - MYSQL_ROOT_PASSWORD=B3stS3cret3v3r
      - MYSQL_PASSWORD=An0thrS3crt
      - MYSQL_USER=twentyfour
      - MYSQL_DATABASE=seb

volumes:
###> doctrine/doctrine-bundle ###
  db-data:
  ###< doctrine/doctrine-bundle ###
```

Téléchargement des services et création des containeurs en se basant sur le fichier docker-compose.yml

```
$ docker compose up -d
```

Démarrage des containeurs

```
$
```

Modifier la timezone par défaut de l'application grâce au constructeur

```PHP
# src/Kernel.php
# ...
public function __construct($environment, $debug)
{
    date_default_timezone_set('Europe/Paris');
    parent::__construct($environment, $debug);
}
```

Exemple de configuration de l'ORM. A noter que les dièses ne sont pas des commentaires lorsqu'ils sont utilisés pour configurer l'ORM !

```PHP
# src/Entity/Client.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:'clients')]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:'integer', options:['unsigned'=>true])]
    private int $id;

    #[ORM\Column(type:'text', length:255, nullable:false)]
    private string $prenom;

    #[ORM\Column(type:'text', length:255, nullable:false)]
    private string $nom;

    # getters & setters
}
```
