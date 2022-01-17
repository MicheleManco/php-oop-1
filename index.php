<!-- DEFINIRE CLASSE Film:
           Attributi:
           - titolo
           - sottotiolo
           - regista
      
           Metodi:
           - costruttore che accetta titolo
           - getFullTitle: 
               Se sottotitolo presente:
                 restituisce "titolo: sottotitolo" 
               Se sottotiolo assente:
                 restituisce "titolo" 
           - __toString: 
               Se regista presente:
                 restituisce "fullTitle | regista"
               Se regista assente:
                 restituisce "fullTitle | ???"
      
      UTILIZZO OGGETTI Film:
      
           Generare 3 istanze della classe Film:
           - uno con solo il titolo
           - uno con titolo e sottotitolo
           - uno con titolo, sottotiolo e regista
      
           Stampare tutti gli oggetti tramite toString (implicito)
      
       RISULTATO ATTESO:
     
           Matrix | ???
           Fantozzi 2: il ritorno di fantozzi | ???
           Peter Pan: il ritorno all'isola che non c'e' | Robin Budd -->
<?php

class Film{

    public $titolo;
    public $sottotitolo;
    public $regista;

    public function __construct($titolo){
        return $this->titolo = $titolo;
    }

    public function getFullTitle(){
        if ($this->sottotitolo) {
            return $this->titolo . ": " . $this->sottotitolo;
        }else {
            return $this->titolo;
        }
    }

    public function __toString(){
        if ($this->regista) {
            return $this->getFullTitle() . " | " . $this->regista . "<br>";
        }else {
            return $this->getFullTitle() . " | ???"  . "<br>";
        }
    }
}

$f1 = new Film("ritorno al futuro");
$f2 = new Film("ritorno al futuro 1");
$f3 = new Film("ritorno al futuro 2");

$f2 -> sottotitolo = "il ritorno";
$f3 -> sottotitolo = "la vendetta";

$f3 -> regista = "Arnold";

echo $f1->__toString() . "<br>" . 
    $f2->__toString() . "<br>" . 
    $f3->__toString() . "<br>";

?>