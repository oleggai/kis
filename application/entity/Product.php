<?php
/**
 * Class Product
 * @Entity
 * @Table(name="products")
 */

class Product {
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->composition = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_product")
     */
    private $idProduct;

    /**
     *@Column(type="string", length=300, name="name_product")
     */
    private $name;

    /**
     * @Column(type = "decimal", name = "price")
     */
    private  $price;

    /**
     * @Column(type = "string", name = "image", length = 250)
     */
    private $image;

    /**
     * @OneToMany(targetEntity="Composition", mappedBy="product")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $composition;

    /**
     *@return \Doctrine\Common\Collections\Collection
     */
    public function getComposition() {
        return $this->composition;
    }

    /**
     * @return integer
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param string $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $name
     * @return Product
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

    /**
     * @param decimal $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getPrice()
    {
        return $this->price;
    }
}