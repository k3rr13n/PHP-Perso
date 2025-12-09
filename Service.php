<?php
class Service {

    private $url;

    public function __construct(string $url) {
        // Fonction qui construit un url, grace a un string passé en paramettre
        $this->url = $url;
    }

    public function getData() {
        // Fonction qui permet de récupérer les information si l'url de la classe est valide
        if(!$this->isValid())
        {
            trigger_error('Not an URL', E_USER_ERROR);
        }
        return file_get_contents($this->url);
    }

    private function isValid() {
        // Fonction qui permet de verifier si l'url est bien conforme
        return preg_match('/^https?:\/\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b(?:[-a-zA-Z0-9()@:%_\+.~#?&\/=]*)$/', $this->url);
    }
}

?>