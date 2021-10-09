<?php

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Shared\Domain\DomainError;

class CoursesNotFound extends DomainError
{
    public function __construct()
    {
        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'courses_not_found';
    }

    protected function errorMessage(): string
    {
        return 'There is not any course';
    }
}
