<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("PROMÉTETE A TI MISMO QUE NUNCA VAS A RENDIRTE",
        "Una vez que cuestionas tus propias creencias, estás acabado",
        "NO ME RIO DE LOS POBRES PORQUE DE ALLA VENGO, NI DE LOS RICOS PORQUE PARA ALLÁ VOY.",
        "NADIE QUE ESTÉ CASADO ES FELIZ.",
        "Nadie golpea mas fuerte que la vida, pero no importa lo fuerte que golpee, sino lo mucho que resistas y sigas avanzando, ¡Así es cómo se gana!",
        "No se dice \"más mejor\" se dice \"mucho mejor\", así suena más mejor...",
        "Que Dios te ayude a cumplir todos tus sueños.",
        "LA PRINCIPAL CAUSA DEL FRACASO ES ESCUCHAR A GENTE NEGATIVA Y LO PEOR ES HACERLES CASO",
        "DONDE EL LENGUAJE SE DETIENE, LO QUE SIGUE HABLANDO ES LA CONDUCTA.",
        "NO SE COMO TERMINA MI HISTORIA PERO EN SUS PAGINAS NUNCA LEERAS \"ME DI POR VENCIDO\"",
        "LAS MENTIRAS SÉ ESPARCEN MÁS RÁPIDO QUE LA VERDAD.",
        "Yo no sov antisocial ni solitario",
        "¿De qué te sirve el poder y la inteligencia, si tu misión no es grande y tu visión no llega más allá de ella?",
        "Vivimos en un mundo",
        "¿TE CAIGO MAL? PERFECTO. UNA PERSONA MENOS QUE SALUDAR",
    );

    public static $images = array("https://storage.googleapis.com/randomquotes-bucket/frase1.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase10.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase11.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase12.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase13.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase14.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase15.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase2.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase3.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase4.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase5.jpeg",
        "https://storage.googleapis.com/randomquotes-bucket/frase6.png",
        "https://storage.googleapis.com/randomquotes-bucket/frase7.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase8.jpg",
        "https://storage.googleapis.com/randomquotes-bucket/frase9.jpg",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        $randomImage = Controller::$images[$randomNumber];
        return response()->json(['quote' => $randomQuote, 'image' => $randomImage, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function showImage() {
        $totalImages = (count(Controller::$images));
        $randomNumber = (rand(0,($totalImages-1)));
        $randomImage = Controller::$images[$randomNumber];
        return response ("<img src=" . $randomImage . ">\n<p>ip del servidor: " . gethostbyname(gethostname()) . " </p>");
    }
}
