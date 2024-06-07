<?php

class desencriptador
{
    private $encriptado, $desencriptado;


    public function __construct($frase)
    {
        $this->setEncriptado($frase);
    }
    /**
     * Get the value of encriptado
     */
    public function getEncriptado()
    {
        return $this->encriptado;
    }

    /**
     * Set the value of encriptado
     *
     * @return  self
     */
    public function setEncriptado($encriptado)
    {
        $this->encriptado = str_split($encriptado, 2);

        return $this;
    }

    /**
     * Get the value of desencriptado
     */
    public function getDesencriptado()
    {
        return $this->desencriptado;
    }

    /**
     * Set the value of desencriptado
     *
     * @return  self
     */
    public function setDesencriptado($desencriptado)
    {
        $this->desencriptado = $desencriptado;

        return $this;
    }

    public function desencriptar(): void
    {
        $letras = "qwertyuiopasdfghjklçzxcvbnm ";

        $string = $this->getEncriptado();
        for ($i = 0; $i < sizeof($string); $i++) {
            $string[$i] = strtolower($string[$i]);
        }
        if ($string) {
            for ($y = 0; $y < sizeof($string); $y++) {
                $contador = 0;
                $i = 0;
                while ($i < strlen($letras)) {
                    str_contains($string[$y], $letras[$i]) ? $contador = $i : null;
                    $i++;
                }
                if ($contador == 28) {
                    $contador += 1;
                }
                if ($contador == 27) {
                    $contador += 1;
                }
                $conversao[$y] = $letras[$contador - 1];
            }
            for ($i = 0; $i < sizeof($conversao); $i++) {
                $this->setDesencriptado($this->getDesencriptado() . $conversao[$i]);
            }
        } else {
            $this->setDesencriptado("Não há mensagem para codificar");
        }
    }
}