<?php

namespace CodelyTv\Mooc\VideoLike\Domain;

use CodelyTv\Mooc\Videos\Domain\VideoId;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

class VideoLike
{
    private Uuid $uuid;
    private VideoLikeId $id;
    private VideoId $videoId;
    private UserId $userId;

    public function __construct(Uuid $uuid, VideoLikeId $id, VideoId $videoId, UserId $userId)
    {
        $this->uuid = $uuid;
        $this->id = $id;
        $this->videoId = $videoId;
        $this->userId = $userId;
    }

    public static function like(Uuid $uuid, VideoLikeId $id, VideoId $videoId, UserId $userId): self
    {
        return new self($uuid, $id, $videoId, $userId);
    }

    /**
     * @return Uuid
     */
    public function uuid(): Uuid
    {
        return $this->uuid;
    }

    /**
     * @return VideoLikeId
     */
    public function id(): VideoLikeId
    {
        return $this->id;
    }

    /**
     * @return VideoId
     */
    public function videoId(): VideoId
    {
        return $this->videoId;
    }

    /**
     * @return UserId
     */
    public function userId(): UserId
    {
        return $this->userId;
    }
}