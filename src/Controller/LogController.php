<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogController
{
    /**
     * @Route("/log/msg/{size}", name="app_log_msg")
     * @param int $size
     * @param LoggerInterface $logger
     * @return Response
     * @throws \Exception
     */
    public function msg($size, LoggerInterface $logger)
    {
        $logger->info(str_repeat('s', $size));

        return new JsonResponse(['char' => 's', 'repeat' => $size]);
    }
}