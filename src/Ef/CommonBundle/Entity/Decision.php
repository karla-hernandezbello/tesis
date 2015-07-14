<?php

namespace Ef\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decision
 */
class Decision
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $decision;

    /**
     * @var string
     */
    private $razon;

    /**
     * @var string
     */
    private $departamento;

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
     * Set decision
     *
     * @param string $decision
     * @return Decision
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return string 
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set razon
     *
     * @param string $razon
     * @return Decision
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get razon
     *
     * @return string 
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Decision
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Decision
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
     * @return Decision
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
     * @return Decision
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
     * @return Decision
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
     * @return Decision
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
