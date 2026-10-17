<?php
/*Dato il seguente codice di partenza:

        class Car {
          private $num_telaio;
        }

        class Fiat extends Car {
          protected $license;
          protected $name;
        }

    Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritieni più opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina è Opel, con targa ND 123 OJ e numero di Telaio 1234“.*/

        class Car {
          private $num_telaio;
          public function __construct($num){
            $this->num_telaio=$num;
            $this->getnum_telaio();
          }

          public function getnum_telaio(){
            return  $this->num_telaio;
          }
        
        }


        class Fiat extends Car {
          protected $license;
          protected $name;
        
          public function __construct($new_name,$new_license,$num){
            parent::__construct($num);
            $this->name=$new_name;
            $this->license=$new_license;
         }

         public function info(){
             echo "La mia macchina è $this->name, con targa $this->license e numero di Telaio ". $this->getnum_telaio() ."\n";}
        }

        $car1= new Fiat('Opel','ND 123 OJ','1234');
        $car1->info();



?>