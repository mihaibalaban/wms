<?php

namespace StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock")
 */
class Stock
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $container_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContainer(): ?int
    {
        return $this->container_id;
    }

    public function getLocation(): ?int
    {
        return $this->location_id;
    }

    public function getProduct(): ?int
    {
        return $this->product_id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
}