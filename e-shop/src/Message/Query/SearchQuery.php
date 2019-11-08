<?php


namespace App\Message\Query;


class SearchQuery
{
    private $searchTerm;

    public function __construct(string $searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }

    public function getTerm(): string
    {
        return $this->searchTerm;
    }
}