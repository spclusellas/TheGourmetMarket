<?php
class PreguntasFrecuentes{
    private $pregunta;
    private $respuesta;

    public function getPregunta()
    {
        return $this->pregunta;
    }
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }
}
