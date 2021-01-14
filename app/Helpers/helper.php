<?php
if (!function_exists('jsonResponse')) {
    function jsonResponse($status = 'success', $msg = '', $code = 200, $data = null)
    {
        return response()->json([
            'status'  => $status,
            'message' => $msg,
            'data'    => $data
        ], $code);
    }
}


