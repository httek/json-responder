<?php

namespace iCraftLTD\Foundation;

use Symfony\Component\HttpFoundation\JsonResponse as Response;

class JsonResponse
{
    /**
     * @param array $data
     * @param string $message
     * @param int $code
     * @param int $status
     * @param array $headers
     * @return Response
     */
    public static function make($data = [], string $message = 'OK', int $code = 2000, int $status = Response::HTTP_OK, array $headers = [])
    {
        $data = is_null($data) || empty($data) ? new \stdClass() : $data;
        
        return new Response([
            'code' => $code, 'data' => $data, 'message' => $message, 'timestamp' => time()
        ], $status, $headers);
    }
}