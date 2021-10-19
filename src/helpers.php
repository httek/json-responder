<?php

use iCraftLTD\Foundation\JsonResponse;

if (! function_exists('fail'))
{
    /**
     * @param int $code
     * @param string $message
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function fail(int $code = 5000, string $message = 'Fail', array $data = []) {
        return JsonResponse::make($data, $message, $code);
    }
}

if (! function_exists('success'))
{
    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    function success(string $message = 'Fail', array $data = [], int $code = 2000) {
        return JsonResponse::make($data, $message, $code);
    }
}