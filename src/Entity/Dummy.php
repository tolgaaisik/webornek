<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DummyRepository")
 *@ORM\Table()
 */
class Dummy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**@ORM\Column(type="string",length=280)
    */
    private $text;
    /**
    *@ORM\Column(type="datetime")
    */
    private $time;
    /**
    * @return mixed
    */
    public function getId()
    {
        return $this->id;
    }
    public function gettext()
    {
        return $this->text;
    }
    /**
    * @param mixed $text
    */
    public function setText($text):void
    {
        $this->text= $text;
    }
    /**
    * @return mixed
    */
    public function getTime()
    {
        return $this->time;

    }
    /**
    * @param mixed time
    */
    public function setTime($time):void
    {
        $this->time = $time;
    }
}
