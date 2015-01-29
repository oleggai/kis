<?php
/**
 * Class Composition
 * @Entity
 * @Table(name="composition")
 */
class Composition {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_composition")
     */
    private $idComposition;
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
     * @return integer
     */
    public function getIdComposition()
    {
        return $this->idComposition;
    }

    /**
     * @param \Product $product
     * @return Composition
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
     * @return Composition
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