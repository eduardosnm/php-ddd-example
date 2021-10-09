<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Response;

class CoursesResponse implements Response
{
    private array $course;

    public function __construct(array $course)
    {
        $this->course = $course;
    }

    public function getCourse(): array
    {
        return $this->course;
    }
}
