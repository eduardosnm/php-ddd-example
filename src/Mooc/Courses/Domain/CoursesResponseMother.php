<?php

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Mooc\Courses\Application\Find\CoursesResponse;

class CoursesResponseMother
{
    public static function create(array $courses): CoursesResponse
    {
        return new CoursesResponse($courses);
    }
}
