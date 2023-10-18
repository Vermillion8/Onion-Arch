<?php

namespace App\Http\TA\Domain\Models;

use App\Http\TA\Domain\Enum\TopicStatus;

class Topic
{
  public function __construct(
    private ?int $id,
    private string $title,
    private string $description,
    private TopicStatus $status,
  ) 
  {
  }

  // Getters
  public function getId(): ?int
  {
    return $this->id;
  }
  public function getTitle(): string
  {
    return $this->title;
  }
  public function getDescription(): string
  {
    return $this->description;
  }

  public function getStatus(): TopicStatus
  {
    return $this->status;
  }
}
