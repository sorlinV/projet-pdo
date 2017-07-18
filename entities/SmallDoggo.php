<?php
namespace entities;

class SmallDoggo
{
    private $id;
    private $name;
    private $race;
    private $good;
    private $birth;

    /**
     * smallDoggo constructor.
     * @param $id
     * @param $name
     * @param $race
     * @param $good
     * @param $birth
     */
    public function __construct(string $name, string $race, bool $good, string $birth, int $id = -1)
    {
        $this->id = $id;
        $this->name = $name;
        $this->race = $race;
        $this->good = $good;
        $this->birth = $birth;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @return mixed
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * @param mixed $good
     */
    public function setGood($good)
    {
        $this->good = $good;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }
}