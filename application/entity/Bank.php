<?php
/**
 * Class Bank
 * @Entity
 * @Table(name="banks")
 */

class Bank {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_bank")
     */
    private $idBank;

    /**
     *@Column(type="string", length=300, name="name_bank")
     */
    private $nameBank;

    /**
     * @param integer $idBank
     */
    public function setIdBank($idBank)
    {
        $this->idBank = $idBank;
    }

    /**
     * @return integer
     */
    public function getIdBank()
    {
        return $this->idBank;
    }

    /**
     * @param string $nameBank
     */
    public function setNameBank($nameBank)
    {
        $this->nameBank = $nameBank;
    }

    /**
     * @return string
     */
    public function getNameBank()
    {
        return $this->nameBank;
    }

}