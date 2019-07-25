<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 *@UniqueEntity(fields="email", message="this e-mail is already used")
 *@UniqueEntity("fields="username", message="this username is already used")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     *@Assert\NotBlank()
     *@Assert\Length(min=5, max=50)
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $password;
    /**
    *@Assert\NotBlank()
    *@Assert\Length(min=8, max=4096)
    */

    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     *@Assert\NotBlank()
     *@Asser\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50)
    *@Assert\NotBlank()
    *@Assert\Length(min=4, max=50)
     */
    private $fullName;

    public function getRoles()
    {
        return [
            'ROLE_USER'
        ];
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function eraseCredentials()
    {

    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function unserialize($serialized)
    {
        list($this->id,
            $this->username,
            $this->password) = unserialize($serialized);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword):void
    {
        $this->plainPassword= $plainPassword;
    }
    public function getId()
    {
        return $this->id;
    }
}
