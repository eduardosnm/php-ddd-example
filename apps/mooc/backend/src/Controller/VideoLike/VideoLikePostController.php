<?php

namespace CodelyTv\Apps\Mooc\Backend\Controller\VideoLike;

use CodelyTv\Mooc\VideoLike\Application\Create\CreateVideoLikeCommand;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VideoLikePostController extends ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request): Response
    {
        $command = new CreateVideoLikeCommand(
            $request->request->get('uuid'),
            $request->request->get('videoLikeId'),
            $request->request->get('videoId'),
            $request->request->get('userId')
        );

        $this->dispatch($command);

        return new Response('', Response::HTTP_CREATED);
    }
}