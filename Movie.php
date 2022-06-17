<?php

class Movie
{
  public $title;
  public $director;
  public $plot;
  private $length = 0;

  public function __construct($title, $director, $plot)
  {
    $this->title = $title;
    $this->director = $director;
    $this->plot = $plot;
  }

  public function setLength($seconds)
  {
    $this->length = $seconds;
  }

  public function getLengthSeconds()
  {
    return $this->length;
  }

  public function getLengthMinutes()
  {
    return $this->length / 60;
  }

  public function getLengthHours()
  {
    return $this->getLengthMinutes() / 60;
  }
}
