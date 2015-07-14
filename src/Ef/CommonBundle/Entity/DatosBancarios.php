<?php

namespace Ef\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosBancarios
 */
class DatosBancarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $tipoCuenta;

    /**
     * @var integer
     */
    private $numeroCuenta;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Ef\CommonBundle\Entity\Persona
     */
    private $persona;

    /**
     * @var \Ef\CommonBundle\Entity\Solicitud
     */
    private $solicitud;

    /**
     * @var \Ef\CommonBundle\Entity\Usuario
     */
    private $create;

    /**
     * @var \Ef\CommonBundle\Entity\Usuario
     */
    private $update;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return DatosBancarios
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set tipoCuenta
     *
     * @param string $tipoCuenta
     * @return DatosBancarios
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return string 
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set numeroCuenta
     *
     * @param integer $numeroCuenta
     * @return DatosBancarios
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;

        return $this;
    }

    /**
     * Get numeroCuenta
     *
     * @return integer 
     */
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return DatosBancarios
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return DatosBancarios
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set persona
     *
     * @param \Ef\CommonBundle\Entity\Persona $persona
     * @return DatosBancarios
     */
    public function setPersona(\Ef\CommonBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Ef\CommonBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set solicitud
     *
     * @param \Ef\CommonBundle\Entity\Solicitud $solicitud
     * @return DatosBancarios
     */
    public function setSolicitud(\Ef\CommonBundle\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \Ef\CommonBundle\Entity\Solicitud 
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * Set create
     *
     * @param \Ef\CommonBundle\Entity\Usuario $create
     * @return DatosBancarios
     */
    public function setCreate(\Ef\CommonBundle\Entity\Usuario $create = null)
    {
        $this->create = $create;

        return $this;
    }

    /**
     * Get create
     *
     * @return \Ef\CommonBundle\Entity\Usuario 
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * Set update
     *
     * @param \Ef\CommonBundle\Entity\Usuario $update
     * @return DatosBancarios
     */
    public function setUpdate(\Ef\CommonBundle\Entity\Usuario $update = null)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Get update
     *
     * @return \Ef\CommonBundle\Entity\Usuario 
     */
    public function getUpdate()
    {
        return $this->update;
    }
}
