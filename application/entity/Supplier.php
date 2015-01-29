<?php
/**
 * Class Supplier
 * @Entity
 * @Table(name="suppliers")
 */
class Supplier {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_supplier")
     */
    private $idSupplier;
    /**
     *@Column(type="string", length=300, name="name_supplier")
     */
    private $nameSupplier;

    /**
     *@Column(type="string", length=400, name="address")
     */
    private $address;

    /**
     *@Column(type="string", length=20, name="phone")
     */
    private $phone;

    /**
     * @ManyToOne(targetEntity="Bank")
     * @JoinColumn(name="bank", referencedColumnName="id_bank")
     */
    private $bank;

    /**
     * @param string $address
     * @return Supplier
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \Bank $bank
     * @return Supplier
     */
    public function setBank(\Bank $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return \Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return integer
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * @param string $nameSupplier
     * @return Supplier
     */
    public function setNameSupplier($nameSupplier)
    {
        $this->nameSupplier = $nameSupplier;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameSupplier()
    {
        return $this->nameSupplier;
    }

    /**
     * @param string $phone
     * @return Supplier
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}