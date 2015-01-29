<?php
/**
 * Class Needraw
 * @Entity
 * @Table(name="need_raw")
 */
class Needraw {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_needraw")
     */
    private $idNeedraw;

    /**
     * @ManyToOne(targetEntity="Product")
     * @JoinColumn(name="product", referencedColumnName="id_product")
     */
    private $product;

    /**
     * @ManyToOne(targetEntity="Raw")
     * @JoinColumn(name="raw", referencedColumnName="id_raw")
     */
    private $raw;

    /**
     * @Column(type = "decimal", name = "amount_raw")
     */
    private $amountRaw;

    /**
     * @param decimal $amountRaw
     * @return Needraw
     */
    public function setAmountRaw($amountRaw)
    {
        $this->amountRaw = $amountRaw;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getAmountRaw()
    {
        return $this->amountRaw;
    }

    /**
     * @return integer
     */
    public function getIdNeedraw()
    {
        return $this->idNeedraw;
    }

    /**
     * @param \Product $product
     * @return Needraw
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
     * @param \Raw $raw
     * @return Needraw
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
}