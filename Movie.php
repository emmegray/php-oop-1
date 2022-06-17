<?php

class Movie
{
  public $title;
  public $director;
  public $plot;
  public $poster;
  private $length = 0;

  public function __construct($title, $director, $plot, $poster)
  {
    $this->title = $title;
    $this->director = $director;
    $this->plot = $plot;
    $this->poster = $poster;
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
