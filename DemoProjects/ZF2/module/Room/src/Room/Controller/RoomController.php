<?php
namespace Room\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RoomController extends AbstractActionController
{
    public function indexAction()
    {
        // Get room ID from route parameters
        $roomId = $this->params()->fromRoute('id');

        echo "Requested Room ID: " . $roomId . "\n"; // Debug output

        // Sample room data
        $roomsData = array(
            1 => array(
                'id'    => 1,
                'type'  => 'Single Room',
                'beds'  => 1,
                'price' => 80,
                'hotel' => 'Grand Hotel',
            ),
            2 => array(
                'id'    => 2,
                'type'  => 'Double Room',
                'beds'  => 2,
                'price' => 120,
                'hotel' => 'Sunset Resort',
            ),
            23 => array(
                'id'    => 23,
                'type'  => 'Suite',
                'beds'  => 3,
                'price' => 250,
                'hotel' => 'Downtown Inn',
            ),
            99 => array(
                'id'    => 99,
                'type'  => 'Penthouse',
                'beds'  => 4,
                'price' => 500,
                'hotel' => 'Grand Hotel',
            ),
        );

        // Get room data by ID or show not found
        $room = isset($roomsData[$roomId]) ? $roomsData[$roomId] : '1';

        return new ViewModel(array(
            'room' => $room,
            'roomId' => $roomId,
        ));
    }
}


// $room = new RoomController()