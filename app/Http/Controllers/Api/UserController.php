<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 *
 * @OA\PathItem(
 *      path="/api/user",
 *      @OA\Get(
 *          operationId="getUsersList",
 *          tags={"Users"},
 *          summary="Get a list of users",
 *          description="Returns a list of users",
 *           security={
 *           {"bearerAuth": {}}
 *       },
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
 *           security={
 *           {"bearerAuth": {}}
 *       },
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
 * ),
 *
 */




class UserController extends Controller
{
    /**
     * Login Api.
     */

    public function login(Request $request)
    {
        try {
            $request->validate([
                'login' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('login', 'password');

            if ($request->filled('login')) {
                if (filter_var($request->login, FILTER_VALIDATE_EMAIL)){
                    $loginType = 'email';
                }elseif (filter_var($request->login, FILTER_VALIDATE_INT)){
                    $loginType = 'phone';
                }else{
                    $loginType = 'username';
                }

                $credentials[$loginType] = $credentials['login'];
                unset($credentials['login']);

                $user = User::where($loginType, $credentials[$loginType])->first();

                if (!$user) {
                    return response()->json([
                        'status' => false,
                        'data' => new \stdClass(),
                        'message' => 'Login or password incorrect.',
                    ], 401);
                }

                $tokenId = Str::uuid();
                $token = $user->createToken($tokenId)->plainTextToken;
                $user->token = $token;

                return response()->json([
                    'status' => true,
                    'data' => $user,
                    'message' => 'Success.'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'data' => new \stdClass(),
                    'message' => 'Login field is required.',
                ], 400);
            }
        } catch (\Exception $exception) {
            return response()->json([
                'status' => false,
                'data' => new \stdClass(),
                'message' => $exception->getMessage(),
            ]);
        }
    }

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

