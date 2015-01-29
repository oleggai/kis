<?php
/**
 * Class Order
 * @Entity
 * @Table(name="orders")
 */
class Order {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_order")
     */
    private $idOrder;

    /**
     * @ManyToOne(targetEntity="Customer")
     * @JoinColumn(name="customer", referencedColumnName="id_customer")
     */
    private $customer;

    /**
     * @ManyToOne(targetEntity="Product")
     * @JoinColumn(name="product", referencedColumnName="id_product")
     */
    private $product;

    /**
     * @Column(name="count", type = "integer", length = 5)
     */
    private $count;

    /**
     *@Column(type="integer", name="paid")
     */
    private $paid;

    /**
     * @Column(type = "datetime", name = "registration_date")
     */
    private $registrationDate;

    /**
     * @Column(type = "datetime", name = "execution_date")
     */
    private $executionDate;

    /**
     * @param integer $count
     * @return Order
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
     * @param \Customer $customer
     * @return Order
     */
    public function setCustomer(\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return \Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \DateTime $executionDate
     * @return Order
     */
    public function setExecutionDate(\DateTime $executionDate = null)
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->executionDate;
    }

    /**
     * @return integer
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * @param integer $paid
     * @return Order
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param \Product $product
     * @return Order
     */
    public function setProduct(\Product $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return \Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \DateTime $registrationDate
     * @return Order
     */
    public function setRegistrationDate(\DateTime $registrationDate = null)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
}