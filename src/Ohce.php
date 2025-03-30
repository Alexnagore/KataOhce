<?php

namespace AlexNagore\Ohce;

class Ohce
{
    private String $nombre;

    public function saludo(string $nombre, int $hora): string
    {
        $this->nombre = $nombre;

        if ($this->isNight($hora)){
            return "¡Buenas noches $nombre!";
        }

        if ($this->isMorning($hora)){
            return "¡Buenos días $nombre!";
        }

        return "¡Buenas tardes $nombre!";

    }

    public function response(string $word): string
    {
        $reversed = strrev($word);

        if ($word === "Stop!"){
            return "Adios " . $this->nombre;
        }

        if ($word === $reversed){
            return $reversed . "\n¡Bonita palabra!";
        }
        return $reversed;
    }

     public function isNight(int $hora): bool
    {
        return $hora >= 20 || $hora < 6;
    }


    public function isMorning(int $hora): bool
    {
        return $hora > 6 && $hora < 12;
    }

}