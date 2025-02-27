<?php
class Song implements JsonSerializable{
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
        return $this->artist;
    }

    public function get_tracknumber(): int{
        return $this->trackNumber;
    }

    public function get_duration(): int{
        return $this->duration;
    }

    public function jsonSerialize()
    {
        return [
            'ID' => $this->ID,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration,
        ];
    }
}
?>