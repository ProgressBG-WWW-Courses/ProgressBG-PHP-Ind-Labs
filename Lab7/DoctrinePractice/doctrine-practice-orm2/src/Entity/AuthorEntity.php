<?php
// File: src/Entity/AuthorEntity.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Table(name="authors")
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class AuthorEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column(type="string", name="first_name") */
    protected $firstName;

    /** @ORM\Column(type="string", name="last_name") */
    protected $lastName;

    /** @ORM\Column(type="integer", name="birth_year") */
    protected $birthYear;

    /** @ORM\Column(type="string", length=100, name="nationality", nullable=true) */
    protected $nationality;

    /** @ORM\OneToMany(targetEntity="BookEntity", mappedBy="author") */
    protected $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    // Getters & Setters
    public function getId()             { return $this->id; }
    public function getFirstName()      { return $this->firstName; }
    public function setFirstName($v)    { $this->firstName = $v; return $this; }
    public function getLastName()       { return $this->lastName; }
    public function setLastName($v)     { $this->lastName = $v; return $this; }
    public function getBirthYear()      { return $this->birthYear; }
    public function setBirthYear($v)    { $this->birthYear = (int) $v; return $this; }
    public function getNationality()    { return $this->nationality; }
    public function setNationality($v)  { $this->nationality = $v; return $this; }

    /** @return Collection|BookEntity[] */
    public function getBooks(): Collection { return $this->books; }

    public function addBook(BookEntity $book): self
    {
        if (!$this->books->contains($book)) {
            $this->books[] = $book;
            $book->setAuthor($this);
        }
        return $this;
    }
}
