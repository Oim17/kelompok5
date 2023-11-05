<?php

include_once "Olahraga.php";

class Badminton implements Olahraga{

    public function melatih(): void{
        echo "Melatihhh Otot Tangan";
    }

    public function membakarKalori(): void{
        echo "Membakar Kalori sebanyak 327 kalori";
    }
}