<?php

namespace App\Http\TA\Domain\Service\Repository;

use App\Http\TA\Domain\Models\Topic;

interface TopicRepositoryInterface
{
  public function persist(Topic $topic);
  public function getById(Topic $topic): ?Topic;
}