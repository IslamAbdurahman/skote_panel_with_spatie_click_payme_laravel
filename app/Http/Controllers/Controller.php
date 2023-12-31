<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\Info(
 *   title="Skote API",
 *   version="1.0.0",
 *   description="Description of your API"
 * ),
 *
 * @OA\SecurityScheme(
 *          securityScheme="bearerAuth",
 *          type="http",
 *          scheme="bearer",
 *          bearerFormat="JWT"
 *     ),
 *
 */


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
