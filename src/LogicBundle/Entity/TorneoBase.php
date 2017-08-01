<?php

namespace LogicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * TorneoBase
 *
 * @ORM\Table(name="torneo_base")
 * @ORM\Entity(repositoryClass="LogicBundle\Repository\TorneoBaseRepository")
 */
class TorneoBase {

    public function __toString() {
        return $this->nombre ? $this->nombre : ''   ;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer", unique=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;
    
    /**
     * @var \DateTime $fechaCreacion
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    protected $fechaCreacion;

    /**
     * @var \DateTime $fechaActualizacion
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="fecha_actualizacion", type="datetime")
     */
    protected $fechaActualizacion;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return TorneoBase
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return int
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TorneoBase
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }


    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return TorneoBase
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     *
     * @return TorneoBase
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }
}
