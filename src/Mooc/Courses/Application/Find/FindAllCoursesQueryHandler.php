<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

class FindAllCoursesQueryHandler
{
    public function __construct(private AllCoursesFinder $finder)
    {
    }

    public function __invoke(FindAllCoursesQuery $query): CoursesResponse
    {
        return new CoursesResponse($this->finder->__invoke());
    }
}
