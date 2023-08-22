<?php

class Television
{
    private $channel;
    private $volume;
    private bool $power;
    function __construct()
    {
        $this->power = true;
        $this->channel = 1;
        $this->volume = 10;
    }

    function getchannel()
    {
        return $this->channel;
    }
    function getVolume()
    {
        return $this->volume;
    }
    function setVolume($volume)
    {
        $this->volume = $volume;
    }
    function setChannel($channel)
    {
        $this->channel = $channel;
    }
    function turnON()
    {
        $this->power = true;
    }
    function turnOFF()
    {
        $this->power = false;
    }
    public function __toString()
    {
        if ($this->power == true) {
            return "Status: " . $this->power . " Sound: " . $this->volume . " Channel: " . $this->channel;
        } else {
            return "TV is off";
        }
    }
}


class Remote
{
    private int $idRemote;
    private Television $tv;
    function __construct($tv)
    {
        $this->tv = $tv;
    }

    function switchchannel($channel)
    {
        if ($this->tv != null) {
            $this->tv->setChannel($channel);
        }
    }
    function UPvolume()
    {
        if ($this->tv != null) {
            $oldSound = $this->tv->getVolume();
            if ($oldSound + 5 >= 100)
                $this->tv->setVolume(100);
            else {
                $this->tv->setVolume($oldSound + 5);
            }
        }
    }
    function DownVolume()
    {
        if ($this->tv != null) {
            $oldSound = $this->tv->getVolume();
            if ($oldSound - 5 >= 100)
                $this->tv->setVolume(100);
            else {
                $this->tv->setVolume($oldSound - 5);
            }
        }
    }
    public function turnOn()
    {
        if ($this->tv != null) {
            $this->tv->turnOn();
        }
    }

    public function turnOff()
    {
        if ($this->tv != null) {
            $this->tv->turnOff();
        }
    }
}
