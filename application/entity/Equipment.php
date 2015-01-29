<?php
/**
 * Class Equipment
 * @Entity
 * @Table(name="equipments")
 */

class Equipment {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", name="id_equipment")
     */
    private $idEquipment;

    /**
     *@Column(type="string", length=300, name="name")
     */
    private $name;

    /**
     *@Column(type="string", length = 100, name="brand")
     */
    private $brand;

    /**
     * @Column(type = "integer", length = 11, name = "count")
     */
    private $count;

    /**
     * @Column(type = "integer", length = 11, name = "cost")
     */
    private $cost;

    /**
     * @Column(type = "datetime", name = "buy_date")
     */
    private $buyDate;

    /**
     * @Column(type = "datetime", name = "expire_date")
     */
    private $expireDate;

    /**
     * @param string $brand
     * @return Equipment
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \DateTime $buyDate
     * @return Equipment
     */
    public function setBuyDate(\DateTime $buyDate = null)
    {
        $this->buyDate = $buyDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBuyDate()
    {
        return $this->buyDate;
    }

    /**
     * @param integer $cost
     * @return Equipment
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param integer $count
     * @return Equipment
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
     * @param \DateTime $expireDate
     * @return Equipment
     */
    public function setExpireDate(\DateTime $expireDate = null)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @return integer
     */
    public function getIdEquipment()
    {
        return $this->idEquipment;
    }

    /**
     * @param string $name
     * @return Equipment
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
}