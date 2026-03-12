<?php
namespace Hotel\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HotelController extends AbstractActionController
{
    public function indexAction()
    {
        // GEt hotels data (in a real application, this would come from a database)
        $hotels = array(
            array(
                'id'   => 1,
                'name' => 'Grand Hotel',
                'city' => 'New York',
                'rating' => 5,
            ),
            array(
                'id'   => 2,
                'name' => 'Sunset Resort',
                'city' => 'Los Angeles',
                'rating' => 4,
            ),
            array(
                'id'   => 3,
                'name' => 'Downtown Inn',
                'city' => 'Chicago',
                'rating' => 4,
            ),
        );

        return new ViewModel(array(
            'hotels' => $hotels,
        ));
    }
}
