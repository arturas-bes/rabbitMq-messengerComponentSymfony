<?php


namespace App\MessageHandler\Query;


use App\Message\Query\SearchQuery;

class SearchQueryHandler
{
    // symfony magic method
    public function __invoke(SearchQuery $searchQuery)
    {
        // TODO: Implement __invoke() method.
        //call database
        sleep(1);
        var_dump($searchQuery);

        return ' result from database';
    }
}