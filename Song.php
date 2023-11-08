<?php
class song{
    private $ID;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    public function __construct($ID, $name, $artist, $trackNumber, $duration)
    {
       $this->ID = $ID;
       $this->name = $name;
       $this->artist = $artist;
       $this->trackNumber = $trackNumber;
       $this->duration = $duration;
    }

    public function get_ID(): int{
        return $this->ID;
    }

    public function get_name(): String{
        return $this->name;
    }

    public function get_artist(): String{
        return $this->ID;
    }

    public function get_tracknumber(): int{
        return $this->trackNumber;
    }

    public function get_duration(): int{
        return $this->duration;
    }
}
?>