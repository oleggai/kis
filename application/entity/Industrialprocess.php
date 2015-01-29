<?php
/**
 * Class Industrialprocess
 * @Entity
 * @Table(name="industrial_process")
 */
class Industrialprocess {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_industrialprocess")
     */
    private $idIndustrialprocess;

    /**
     * @Column(type = "datetime", name = "date")
     */
    private $date;

    /**
     * @ManyToOne(targetEntity="Worker")
     * @JoinColumn(name="worker", referencedColumnName="id_worker")
     */
    private $worker;

    /**
     * @ManyToOne(targetEntity="Equipment")
     * @JoinColumn(name="equipment", referencedColumnName="id_equipment")
     */
    private $equipment;

    /**
     * @ManyToOne(targetEntity="Product")
     * @JoinColumn(name="product", referencedColumnName="id_product")
     */
    private $product;

    /**
     * @Column(type = "integer", name = "products_count")
     */
    private $productsCount;

    /**
     * @param \DateTime $date
     * @return Industrialprocess
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return /DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \Equipment $equipment
     * @return Industrialprocess
     */
    public function setEquipment(\Equipment $equipment = null)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * @return \Equipment
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @return integer
     */
    public function getIdIndustrialprocess()
    {
        return $this->idIndustrialprocess;
    }

    /**
     * @param \Product $product
     * @return Industrialprocess
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
     * @param integer $productsCount
     * @return Industrialprocess
     */
    public function setProductsCount($productsCount)
    {
        $this->productsCount = $productsCount;
        return $this;
    }

    /**
     * @return integer
     */
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    /**
     * @param \Worker $worker
     * @return Industrialprocess
     */
    public function setWorker(\Worker $worker = null)
    {
        $this->worker = $worker;
        return $this;
    }

    /**
     * @return \Worker
     */
    public function getWorker()
    {
        return $this->worker;
    }
}