<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Mooc\VideoLike\Domain\UserId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeId;
use CodelyTv\Mooc\Videos\Domain\VideoId;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

final class CreateVideoLikeCommandHandler
{
    private VideoLikeCreator $creator;

    public function __construct(VideoLikeCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(CreateVideoLikeCommand $command): void
    {
        $uuid = new Uuid($command->uuid());
        $id =  new VideoLikeId($command->videoLikeId());
        $videoId = new VideoId($command->videoId());
        $userId = new UserId($command->userId());

        $this->creator->create($uuid, $id, $videoId, $userId);

    }
}