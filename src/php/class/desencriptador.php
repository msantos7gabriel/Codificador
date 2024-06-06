<?php

class desencriptar
{
    private $encriptado, $desencriptado;


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
        $this->encriptado = $encriptado;

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
}