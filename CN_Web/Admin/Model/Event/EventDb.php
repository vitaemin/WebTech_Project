<?php

namespace Model\Event;

class EventDb
{
    protected $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function getAllEvent() {
        $sql = "select * from event;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function addEvent($title, $description, $imgLink) {
        $sql = "INSERT INTO `event` (`event_id`, `image_link`, `description`, `title`) VALUES ('NULL', '$imgLink', '$description', '$title');";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function updateTitleEvent($eventId, $title) {
        $sql = "UPDATE `event` SET `title` = '$title' WHERE `event`.`event_id` = $eventId;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function updateDescriptionEvent($eventId, $description) {
        $sql = "UPDATE `event` SET `description` = '$description' WHERE `event`.`event_id` = $eventId;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function updateImgLinkEvent($eventId, $imgLink) {
        $sql = "UPDATE `event` SET `image_link` = '$imgLink' WHERE `event`.`event_id` = $eventId;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function getEventDiscount($eventId) {
        $sql = "select discount_rate from event where event_id = $eventId;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function deleteEvent($eventId) {
        $sql = "DELETE FROM event WHERE `event`.`event_id` = $eventId;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }
}