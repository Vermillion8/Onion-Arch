<?php

namespace App\Http\TA\Domain\Enum;

enum TopicStatus : string
{
  case Available = 'available';
  case Unavailable = 'unavailable';
}