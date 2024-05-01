<?php

class encriptador
{
    private  $encriptar, $codificado;

    public function __construct($frase)
    {
        $this->setEncriptar($frase);
    }

    /**
     * Get the value of encriptar
     */
    public function getEncriptar()
    {
        return $this->encriptar;
    }

    /**
     * Set the value of encriptar
     *
     * @return  self
     */
    public function setEncriptar($encriptar)
    {
        $this->encriptar = str_replace(" ", "", $encriptar);;
        return $this;
    }

    /**
     * Get the value of codificado
     */
    public function getCodificado()
    {
        return $this->codificado;
    }

    /**
     * Set the value of codificado
     *
     * @return  self
     */
    public function setCodificado($codificado)
    {
        $this->codificado = $codificado;
        return $this;
    }

    public function encriptar() : void
    {
        $letras = "qwertyuiopasdfghjklçzxcvbnm";
        $string = $this->getEncriptar();

        if ($string) {
            for ($y = 0; $y < strlen($string); $y++) {
                $i = 0;
                $contador = 0;
                while($i < strlen($letras)){
                    $string[$y] === $letras[$i] ? $contador = $i : 'ok';
                    $i++;
                }

                $suce = $contador + 1;
                $ante = $contador - 1;
                $suce > 27 ? $suce = 0 : 'ok';
                $ante < 0 ? $ante = 27 : 'ok';

                $duplas[$y] = $letras[$ante] . $letras[$suce];
            }
            for ($i = 0; $i < sizeof($duplas); $i++) {
                $this->setCodificado($this->getCodificado() . $duplas[$i]);
            }
        } else {
            $this->setCodificado("Não há mensagem para codificar");
        }
    }
}