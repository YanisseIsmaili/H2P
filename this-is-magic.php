<?php
        class Magic
        {
            public string $card;

            public function __construct(string $card = "As")
            {
                echo "initialise l'objet instancié\n";
                $this->card = $card;
            }

            public function __toString(): string
            {
                echo "convertir l'objet en string\n";
                return $this->card;
            }

            public function __destruct()
            {
                echo "détruire l'objet instancié\n";
            }

            public function __get($name)
            {
                echo "permet d'acceder a un attribut non accessible\n";
            }

            public function __set($name, $value)
            {
                echo "permet de modifier un attribut non accessible\n";
            }

            public function __isset($name)
            {
                echo "permet de savoir si un attribut non accessible existe\n";
            }
        }