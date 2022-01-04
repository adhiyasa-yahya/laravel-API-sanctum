<?php

if (!function_exists('errorResponse')) {
  function errorResponse($code = 500, $errors = [], $message = "Response Failed")
  {
      return response()->json([
          'success' => false,
          'message' => $message,
          'errors' => !empty($errors) ? $errors : null,
      ], $code);
  }
}

if (!function_exists('successResponse')) {
  function successResponse($message = "Response Success", $data = [], $code = 200)
  {
      return response()->json([
          'success' => true,
          'message' => $message,
          'data' => !empty($data) ? $data : null,
      ], $code);
  }
}