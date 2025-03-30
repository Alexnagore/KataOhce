<?php

namespace AlexNagore\Ohce;

class Ohce
{
    public function saludo(string $nombre, int $hora): string
    {

        if ($hora >= 20 || $hora < 6){
            return "¡Buenas noches $nombre!";
        }

        if ($hora > 6 && $hora < 12){
            return "¡Buenos días $nombre!";
        }

        return "¡Buenas tardes $nombre!";

    }

}