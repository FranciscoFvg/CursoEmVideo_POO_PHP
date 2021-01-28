<?php
require_once './Mamifero.php';

class Cachorro extends Mamifero{
    
    public function abanarRabo(){
        echo "<p>Rabinho balançando.</p>";
    }
    public function enterrarOsso(){
        echo "<p>Cavando buraco pra osso.</p>";
    }
    
}