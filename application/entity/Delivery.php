<?php
/**
 * Class Delivery
 * @Entity
 * @Table(name="deliveries")
 */
class Delivery {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_delivery")
     */
    private $idDelivery;
    /**
     * @ManyToOne(targetEntity="Supplier")
     * @JoinColumn(name="supplier", referencedColumnName="id_supplier")
     */
    private $supplier;

    /**
     * @ManyToOne(targetEntity="Raw")
     * @JoinColumn(name="raw", referencedColumnName="id_raw")
     */
    private $raw;

    /**
     *@Column(type="datetime", name="date")
     */
    private $date;

    /**
     * @Column(name="count", type = "integer")
     */
    private $count;

    /**
     * @Column(name="paid", type = "decimal")
     */
    private $paid;


    /**
     * @param integer $count
     * @return Delivery
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param \DateTime $date
     * @return Delivery
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param integer $idDelivery
     * @return Delivery
     */
    public function setIdDelivery($idDelivery)
    {
        $this->idDelivery = $idDelivery;
        return $this;
    }

    /**
     * @return  integer
     */
    public function getIdDelivery()
    {
        return $this->idDelivery;
    }

    /**
     * @param decimal $paid
     * @return Delivery
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param \Raw $raw
     * @return Delivery
     */
    public function setRaw(\Raw $raw = null)
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * @return \Raw
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param \Supplier $supplier
     * @return Delivery
     */
    public function setSupplier(\Supplier $supplier = null)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return \Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }


}