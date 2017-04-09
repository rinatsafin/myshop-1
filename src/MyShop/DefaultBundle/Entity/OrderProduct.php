<?php

namespace MyShop\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderProduct
 *
 * @ORM\Table(name="order_product")
 * @ORM\Entity(repositoryClass="MyShop\DefaultBundle\Repository\OrderProductRepository")
 */
class OrderProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="id_shop_product", type="integer")
     */
    private $idProduct;

    /**
     * @ORM\Column(name="count", type="integer")
    */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var CustomerOrder
     *
     * @ORM\ManyToOne(targetEntity="MyShop\DefaultBundle\Entity\CustomerOrder", inversedBy="productList")
     * @ORM\JoinColumn(name="id_order", referencedColumnName="id")
    */
    private $order;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set count
     *
     * @param \int $count
     *
     * @return OrderProduct
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return \int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return OrderProduct
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return OrderProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OrderProduct
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set order
     *
     * @param \MyShop\DefaultBundle\Entity\CustomerOrder $order
     *
     * @return OrderProduct
     */
    public function setOrder(\MyShop\DefaultBundle\Entity\CustomerOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \MyShop\DefaultBundle\Entity\CustomerOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     *
     * @return OrderProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
}