<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Mooc\VideoLike\Domain\UserId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLike;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeRepository;
use CodelyTv\Mooc\Videos\Domain\VideoId;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

class VideoLikeCreator
{
    private VideoLikeRepository $repository;

    public function __construct(VideoLikeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(Uuid $uuid, VideoLikeId $id, VideoId $videoId, UserId $userId)
    {
        $videoLike = VideoLike::like($uuid, $id, $videoId, $userId);

        $this->repository->save($videoLike);
    }
}