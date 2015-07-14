<?php

namespace Ef\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 */
class Solicitud
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $inscripcion;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Ef\CommonBundle\Entity\Usuario
     */
    private $create;

    /**
     * @var \Ef\CommonBundle\Entity\Usuario
     */
    private $update;

    /**
     * @var \Ef\CommonBundle\Entity\Usuario
     */
    private $usuario;


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
     * Set numero
     *
     * @param string $numero
     * @return Solicitud
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set inscripcion
     *
     * @param string $inscripcion
     * @return Solicitud
     */
    public function setInscripcion($inscripcion)
    {
        $this->inscripcion = $inscripcion;

        return $this;
    }

    /**
     * Get inscripcion
     *
     * @return string 
     */
    public function getInscripcion()
    {
        return $this->inscripcion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Solicitud
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Solicitud
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
     * @return Solicitud
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
     * Set create
     *
     * @param \Ef\CommonBundle\Entity\Usuario $create
     * @return Solicitud
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
     * @return Solicitud
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

    /**
     * Set usuario
     *
     * @param \Ef\CommonBundle\Entity\Usuario $usuario
     * @return Solicitud
     */
    public function setUsuario(\Ef\CommonBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Ef\CommonBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
