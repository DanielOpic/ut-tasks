# ut-tasks
Recruitment task 1

Instalacja po pobraniu:
1. Przejdź do folderu
2. W terminalu: composer install
3. W terminalu: php -S localhost:8000
4. W przeglądarce: http://localhost:8000/main.php
5. Zabawy ze zwierzakami w Zoo w pliku main.php

Struktura:

ut-tasks/
├── Animal/                          # Folder ze zwierzętami i wszystkim co im potrzeba
│   ├── Class/                        # Klasy zwierząt
│   │   ├── Animal.php                 # Klasa bazowa zwierzęcia
│   │   ├── Food/                      # Folder z traitami zwierząt według diety
│   │   │   ├── CarnivoreTrait.php      # Trait dla zwierząt mięsożernych
│   │   │   ├── HerbivoreTrait.php      # Trait dla zwierząt roślinożernych
│   │   │   └── OmnivoreTrait.php       # Trait dla zwierząt wszystkożernych
│   │   └── Skin/                      # Folder z trait związanymi z cechami skóry
│   │       └── FurTrait.php            # Trait dla zwierząt z futrem
│   ├── Interface/                    # Folder z Interfejsami 
│   │   ├── AnimalInterface.php        # Interfejs ogólny dla zwierząt
│   │   ├── Food/                      # Folder z interfejsami diety
│   │   │   ├── CarnivoreInterface.php  # Interfejs dla diety mięsożernych
│   │   │   ├── HerbivoreInterface.php  # Interfejs dla diety roślinożernych
│   │   │   └── OmnivoreInterface.php   # Interfejs dla diety wszystkożernych
│   │   └── Skin/                      # Folder z interfejsami dotyczącymi cech skóry
│   │       └── FurInterface.php        # Interfejs dla zwierząt z futrem
│   ├── Species/                      # Folder z konkretnymi gatunkami
│   │   ├── Tiger.php                  # Klasa tygrysa
│   │   ├── Elephant.php               # Klasa słonia
│   │   ├── Rhino.php                  # Klasa nosorożca
│   │   ├── Fox.php                    # Klasa lisa
│   │   ├── SnowLeopard.php            # Klasa irbisa śnieżnego
│   │   └── Rabbit.php                 # Klasa królika
├── Service/                          # Serwisy
│   ├── Animal/                        # Filder z serwisami dotyczącymi zwierząt
│   │   ├── AnimalService.php           # Serwis bazowy zwierząt
│   │   ├── FoodService.php             # Serwis żywienia zwierząt
│   │   └── SkinService.php             # Serwis cech skóry zwierząt
│   └── ZooService.php                 # Serwis obsługujący Zoo
├── main.php                          # Zabawy ze zwierzętami
├── README.md                         # To co właśnie jest czytane
├── composer.json                     # json composera
└── composer.lock                     # lock composera