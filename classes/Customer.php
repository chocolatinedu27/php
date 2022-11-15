<?php

declare(strict_types=1);

class Customer extends User{
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        private float $balance,
        private array $books,
    ) {
        parent::__construct($firstname, $lastname, $email);
     }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function setBooks(array $books): void
    {
        $this->books = $books;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }
} 

?>