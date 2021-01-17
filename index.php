<!-- vorrei che definiste una classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. Infine, implementate anche una funzione che, quando invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa ). Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto. -->

<?php

class StanzaHotel {
    public $grandezza;
    public $prezzo;
    public $numBagni;

    function __construct($grandezza, $prezzo, $numBagni) {
        $this->grandezza = $grandezza;
        $this->prezzo = $prezzo;
        $this->numBagni = $numBagni;
    }

    public function proprietà() {
        return
        "Grandezza: " . $this->grandezza . " " . "<br>"
        ."Prezzo: " . $this->prezzo . " " . "<br>"
        ."Numero di bagni: " . $this->numBagni . "<br><br>";
    }
}

$stanza1 = new StanzaHotel("25mq", "80€", "1");
$stanza2 = new StanzaHotel("55mq", "90€", "1");
$stanza3 = new StanzaHotel("120mq", "150€", "2");


echo $stanza1->proprietà()
. $stanza2->proprietà()
. $stanza3->proprietà();

 ?>
