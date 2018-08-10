<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Book;

class DefaultController
{
    /**
    * @Route("/test")
    */
    public function number()
    {
        $book = new Book();

        return $response = new Response(
            $book->author,
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

    }
}
?>
