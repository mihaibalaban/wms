<?php

namespace TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
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
    private $delivery_line_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_from;

    /**
     * @ORM\Column(type="integer")
     */
    private $container_to;

    /**
     * @ORM\Column(type="string")
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getContainer(): ?int
    {
        return $this->container_to;
    }

    public function getLocation(): ?int
    {
        return $this->location_from;
    }

    public function getProduct(): ?int
    {
        return $this->product_id;
    }

    public function getDeliveryLine(): ?int
    {
        return $this->delivery_line_id;
    }
}