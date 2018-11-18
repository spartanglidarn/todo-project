<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AchivementController
{
    /**
     * @Route("/")
     */
    public function list ()
    {
        $list = [
            'item1' => [
                'id' => 1,
                'name' => 'first item',
                'goal' => [
                    'count' => 5,
                    'start_date' => '2018-09-02',
                    'end_date' => '2018-11-27',
                ],
            ],
            'item2' => [
                'id' => 2,
                'name' => 'secound item',
                'goal' => [
                    'count' => 10,
                    'start_date' => '2018-09-02',
                    'end_date' => '2019-03-02',
                ],
            ],
        ];

        return new Response(
            '<html><body>List all goals on this page </body></html>' 
        );

    }
}
