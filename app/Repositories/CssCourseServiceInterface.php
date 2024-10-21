<?php

namespace App\Repositories;

interface CssCourseServiceInterface
{
    public function createCourseProgress(array $userAnswers, int $userId): void;
    public function saveProgress(array $data): void;
}
