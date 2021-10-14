<?php

namespace CodelyTv\Mooc\VideoLike\Infrastructure;

use CodelyTv\Mooc\VideoLike\Domain\VideoLike;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeRepository;

class FileVideoLikeRepository implements VideoLikeRepository
{
    private const FILE_PATH = __DIR__ . '/videos-likes';

    public function save(VideoLike $like): void
    {
        file_put_contents($this->fileName($like->id()->value()), serialize($like));
    }

    private function fileName(string $id): string
    {
        return sprintf('%s.%s.repo', self::FILE_PATH, $id);
    }
}