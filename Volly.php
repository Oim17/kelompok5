<?php

include_once "Olahraga.php";

class Volly implements Olahraga{

    public function melatih(): void{
        echo "Melatihhh Otot Kaki";
    }

    public function membakarKalori(): void{
        echo "Membakar Kalori sebanyak 90-133s kalori";
    }
} 