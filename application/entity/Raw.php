<?php
/**
 * Class Raw
 * @Entity
 * @Table(name="raw")
 */

class Raw {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_raw")
     */
    private $idRaw;

    /**
     *@Column(type="string", length=300, name="name_raw")
     */
    private $name;

    /**
     * @return integer
     */
    public function getIdRaw()
    {
        return $this->idRaw;
    }

    /**
     * @param string $name
     * @return Raw
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}