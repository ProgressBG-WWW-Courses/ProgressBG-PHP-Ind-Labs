<?php
// File: src/Entity/BookEntity.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BookRepository;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ORM\Table(name: 'books')]
class BookEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    protected ?int $id = null;

    #[ORM\Column(type: 'string', name: 'title')]
    protected string $title;

    #[ORM\Column(type: 'string', name: 'author')]
    protected string $author;

    #[ORM\Column(type: 'integer', name: 'year')]
    protected int $year;

    #[ORM\Column(type: 'boolean', name: 'is_available')]
    protected bool $isAvailable = true;

    // Getters & Setters
    public function getId(): ?int          { return $this->id; }
    public function getTitle(): string     { return $this->title; }
    public function setTitle($v): static   { $this->title = $v; return $this; }
    public function getAuthor(): string    { return $this->author; }
    public function setAuthor($v): static  { $this->author = $v; return $this; }
    public function getYear(): int         { return $this->year; }
    public function setYear($v): static    { $this->year = (int) $v; return $this; }
    public function isAvailable(): bool    { return $this->isAvailable; }
    public function setIsAvailable($v): static { $this->isAvailable = (bool) $v; return $this; }
}
