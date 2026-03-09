<?php
// File: src/Entity/BookEntity.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="books")
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class BookEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column(type="string", name="title") */
    protected $title;

    /** @ORM\Column(type="string", name="author") */
    protected $author;

    /** @ORM\Column(type="integer", name="year") */
    protected $year;

    /** @ORM\Column(type="boolean", name="is_available") */
    protected $isAvailable = true;

    // Getters & Setters
    public function getId()            { return $this->id; }
    public function getTitle()         { return $this->title; }
    public function setTitle($v)       { $this->title = $v; return $this; }
    public function getAuthor()        { return $this->author; }
    public function setAuthor($v)      { $this->author = $v; return $this; }
    public function getYear()          { return $this->year; }
    public function setYear($v)        { $this->year = (int) $v; return $this; }
    public function isAvailable()      { return $this->isAvailable; }
    public function setIsAvailable($v) { $this->isAvailable = (bool) $v; return $this; }
}
