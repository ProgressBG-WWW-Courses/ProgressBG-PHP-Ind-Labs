<?php
class Hotel {
    private $name;
    private $rooms;

    public function __construct($name) {
        $this->name = $name;
        $this->rooms = [];
    }

    public function addRoom($room) {
        $this->rooms[] = $room;
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function getName() {
        return $this->name;
    }
}

