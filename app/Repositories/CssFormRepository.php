<?php

namespace App\Repositories;

use App\Models\CssProgress;

class CssFormRepository implements CssCourseServiceInterface
{
    public function saveProgress(array $data): void
    {
        CssProgress::create($data); // Save progress using the model
    }

    public function createCourseProgress(array $userAnswers, int $userId): void
    {
        // TODO: Implement createCourseProgress() method.
    }
}
