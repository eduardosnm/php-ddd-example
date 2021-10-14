<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Shared\Domain\Bus\Command\Command;

final class CreateVideoLikeCommand implements Command
{
    private string $uuid;
    private string $videoLikeId;
    private string $videoId;
    private string $userId;

    public function __construct(string $uuid, string $videoLikeId, string $videoId, string $userId)
    {
        $this->uuid = $uuid;
        $this->videoLikeId = $videoLikeId;
        $this->videoId = $videoId;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function uuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function videoLikeId(): string
    {
        return $this->videoLikeId;
    }

    /**
     * @return string
     */
    public function videoId(): string
    {
        return $this->videoId;
    }

    /**
     * @return string
     */
    public function userId(): string
    {
        return $this->userId;
    }

}