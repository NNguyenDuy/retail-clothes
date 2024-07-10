<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Import Response class

class Cors
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    // Allow all origins
    $response = $next($request);
    $response->header('Access-Control-Allow-Origin', 'http://localhost:3000, https://retail-clothes.vercel.app');
    $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

    // Optionally add more headers for specific requests
    if ($request->isMethod('OPTIONS')) {
      $response->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin, Authorization');
    }

    return $response;
  }
}
