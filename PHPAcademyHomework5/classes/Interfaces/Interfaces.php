<?php

namespace classes\Interfaces;


interface Inter
{
    public function getDate();
    public function setDate($date);

}

abstract class DateInterface implements Inter
{

    public function setDate($date)
    {
        $this->date = $date;
    }
}

class GetInterface extends DateInterface
{
    public function getDate()
    {
        return $this->date;
    }

}