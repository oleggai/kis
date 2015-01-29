<?php
/**
 * Class Customer
 * @Entity
 * @Table(name="customers")
 */

class Customer {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_customer")
     */
    private $idCustomer;

    /**
     *@Column(type="string", length=300, name="name_customer")
     */
    private $nameCustomer;

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
     * @return Customer
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
     * @return Customer
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
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @param string $nameCustomer
     * @return Customer
     */
    public function setNameCustomer($nameCustomer)
    {
        $this->nameCustomer = $nameCustomer;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameCustomer()
    {
        return $this->nameCustomer;
    }

    /**
     * @param string $phone
     * @return Customer
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