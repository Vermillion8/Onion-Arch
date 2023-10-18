<?php

namespace App\Http\TA\Infrastructure\Repository;

use App\Http\TA\Domain\Models\Topic;
use App\Http\TA\Domain\Service\Repository\TopicRepositoryInterface;

class TopicRepository implements TopicRepositoryInterface {
  public function persist(Topic $topic)
  {
    $data = $this->createPayload($topic);
    DB::table
  }
}