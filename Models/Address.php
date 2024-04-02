<?php
/**
 * Indirizzo completo
 */
class Address {
    public $via;
    public $numero;
    public $citta;
    public $provincia;

    // proprietà statiche
    // le proprietà statiche non possono cambiare e devono per tanto essere definite sin da subito
    // come in questo caso
    public static $stato = "Italia";
    
    /**
     * __construct
     *
     * @param  string $_via
     * @param  string $_numero
     * @param  string $_citta
     * @param  string $_provincia
     */
    function __construct($_via, $_numero, $_citta, $_provincia) {
        $this->via = $_via;
        $this->numero = $_numero;
        $this->citta = $_citta;
        $this->provincia = $_provincia;
    }

    
    /**
     * Restituisce la stringa completa dell'indirizzo, già formattata
     *
     * @return string
     */
    public function getFullAddress() {

        return $this->via . ' ' . $this->numero . ', ' . $this->citta . ', ' . $this->provincia . '. ' . self::$stato;

    }



    public static function getInstructions() {
        return "Per compilare correttamente l'indirizzo devi fornire via, numero, città e provincia.";
    }
}