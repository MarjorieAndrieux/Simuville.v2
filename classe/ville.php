<?php
require 'classe/database.php';
class Ville{

    private $_idVille;
    private $_popIni;
    private $_txNat;
    private $_txMort;
    private $_bddConnexion;
    
    public function __construct($popIni, $txNat, $txMort){
        $bdd = new Database();
        $this->_bddConnexion = $bdd->getPdo();
        $this->_popIni = $popIni;
        $this->_txNat = $txNat;
        $this->_txMort = $txMort;
        
    }

    public function getRegisterVille(){
        $req = $this->_bddConnexion->prepare('INSERT INTO  ville( pop_initiale_ville, tx_natalite_ville, tx_mortalite_ville) VALUES ( ? , ? , ?)');
        $req->bindParam(1, $this->_popIni);
        $req->bindParam(2, $this->_txNat);
        $req->bindParam(3, $this->_txMort);
        $req->execute();
    }


}


?>