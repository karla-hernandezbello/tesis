<?php

namespace Ef\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soportes
 */
class Soportes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $archivo;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

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
     * Set tipo
     *
     * @param string $tipo
     * @return Soportes
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
     * Set archivo
     *
     * @param string $archivo
     * @return Soportes
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Soportes
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
     * @return Soportes
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
     * Set solicitud
     *
     * @param \Ef\CommonBundle\Entity\Solicitud $solicitud
     * @return Soportes
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
     * @return Soportes
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
     * @return Soportes
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
