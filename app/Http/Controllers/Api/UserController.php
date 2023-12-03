<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 *
 * @OA\PathItem(
 *      path="/api/user",
 *      @OA\Get(
 *          operationId="getUsersList",
 *          tags={"Users"},
 *          summary="Get a list of users",
 *          description="Returns a list of users",
 *          @OA\Response(
 *              response=200,
 *              description="Successful operation",
 *              @OA\JsonContent(ref="#/components/schemas/User")
 *          ),
 *          @OA\Response(
 *              response=401,
 *              description="Unauthenticated",
 *          ),
 *          @OA\Response(
 *              response=403,
 *              description="Forbidden"
 *          )
 *      ),
 *      @OA\Post(
 *          operationId="createUser",
 *          tags={"Users"},
 *          summary="Create a new user",
 *          description="Creates a new user",
 *          @OA\RequestBody(
 *              required=true,
 *              @OA\JsonContent(ref="#/components/schemas/User")
 *          ),
 *          @OA\Response(
 *              response=201,
 *              description="User created successfully",
 *              @OA\JsonContent(ref="#/components/schemas/User")
 *          ),
 *          @OA\Response(
 *              response=422,
 *              description="Validation error",
 *          )
 *      ),
 * )
 *
 */


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Hello';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

