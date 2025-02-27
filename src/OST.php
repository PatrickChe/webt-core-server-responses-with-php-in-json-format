<?php
class OST implements JsonSerializable{
    private $ID;
    private $name;
    private $gameName;
    private $releaseYear;
    private $trackList = [];

    public function __construct($ID, $name, $gameName, $releaseYear, $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->gameName = $gameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    public function get_ID(): String{
        return $this->ID;
    }

    public function get_name(): String{
        return $this->name;
    }

    public function get_gameName(): String{
        return $this->gameName;
    }

    public function get_releaseYear(): int{
        return $this->releaseYear;
    }

    public function get_tracklist(): array{
        return $this->trackList;
    }

    public function jsonSerialize()
    {
        return [
            'ID' => $this->ID,
            'name' => $this->name,
            'gameName' => $this->gameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => $this->trackList,
        ];
    }
}
?>