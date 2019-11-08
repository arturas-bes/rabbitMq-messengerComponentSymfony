<?php

namespace App\Controller;

use App\Message\Command\CreateOrder;
use App\Message\Command\SignUpSms;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Message\Query\SearchQuery;

class EshopController extends AbstractController
{
    use HandleTrait;

    /**
     * @var MessageBusInterface
     */
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    /**
     * @Route("/", name="eshop")
     */
    public function index()
    {
        return $this->render('eshop/index.html.twig', [
            'controller_name' => 'EshopController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function search()
    {
        $search = 'laptops';
//        //call database
//        sleep(1);
//        $result = 'result from database';

     //   $this->messageBus->dispatch(new SearchQuery($search));
        $result = $this->handle(new SearchQuery($search));
        return new Response('Your search results for: '.$search.$result);
    }

    /**
     * @Route("/signup-sms", name="signup-sms")
     */
    public function signupSms()
    {
        $phoneNumber = '+37065454525';
        //connect to api of external sms service provider
        $this->messageBus->dispatch(new SignUpSms($phoneNumber));

        return new Response('Your phone number %s succesfully signed up to SMS newsletter! '. $phoneNumber );

    }

    /**
     * @Route("/order", name="order")
     */
    public function order()
    {
        $productId = 243;
        $productName = 'poduct_name';
        $productAmount = 2;

        //save order in database

        //send an email to client confiming the order

        //update warehouse database

        //sleep(4);

        $this->messageBus->dispatch(new CreateOrder($productId, $productAmount));


        return new Response('Your sucesfully ordered your product');
    }
}
