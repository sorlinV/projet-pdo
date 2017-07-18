<?php
namespace entities;

class DoggoHouse
{
    private $id;
    private $color;
    private $material;
    private $size;
    private $doggoId;

    /**
     * doggoHouse constructor.
     * @param $id
     * @param $color
     * @param $material
     * @param $size
     * @param $doggoId
     */
    public function __construct(string $color, string $material, string $size, int $id = -1, int $doggoId = -1)
    {
        $this->id = $id;
        $this->color = $color;
        $this->material = $material;
        $this->size = $size;
        $this->doggoId = $doggoId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getDoggoId()
    {
        return $this->doggoId;
    }

    /**
     * @param mixed $doggoId
     */
    public function setDoggoId($doggoId)
    {
        $this->doggoId = $doggoId;
    }
}