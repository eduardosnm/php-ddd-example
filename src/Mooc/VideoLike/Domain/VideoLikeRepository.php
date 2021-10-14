<?php

namespace CodelyTv\Mooc\VideoLike\Domain;

interface VideoLikeRepository
{
    public function save(VideoLike $like): void;
}