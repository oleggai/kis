<?php
/**
 * Class Worker
 * @Entity
 * @Table(name="workers")
 */

class Worker {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_worker")
     */
    private $idWorker;

    /**
     *@Column(type="string", length=300, name="fullname")
     */
    private $fullname;

    /**
     *@Column(type="integer", length=5, name="experience")
     */
    private $experience;

    /**
     * @return integer
     */
    public function getIdWorker()
    {
        return $this->idWorker;
    }

    /**
     * @param integer $experience
     * @return Worker
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
        return $this;
    }

    /**
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param string $fullname
     * @return Worker
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }
}