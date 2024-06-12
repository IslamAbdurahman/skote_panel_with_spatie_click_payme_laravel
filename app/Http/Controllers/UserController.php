<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $users = User::whereNotIn('id', [auth()->id()]);

        if ($request->search) {
            $users->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('username', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%' . $request->search . '%');
            });
        } else {
            $users = User::whereNotIn('id', [auth()->id()]);
        }

        $users = $users->get();

        $roles = Role::all();

        $permissions = Permission::all();
        return view('pages.user.index', compact([
            'users',
            'roles',
            'permissions'
        ]));

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
    public function store(UserRequest $request)
    {
        try {

            DB::beginTransaction();
            if ($request->file('avatar')) {
                $filename = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->storeAs('public/images/', $filename);
            } else {
                $filename = 'no_image';
            }
            //Save image
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'district_id' => $request->district_id,
                'phone' => preg_replace("/[^0-9]/", "", $request->get('phone')),
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'dob' => date('Y-m-d', strtotime($request->dob)),
                'avatar' => $filename
            ]);

            $user->givePermissionTo([$request->permissions]);
            $user->assignRole($request->role);


            DB::commit();

            return redirect()->back()->with([
                'success' => 'Ma`lumot yaratildi.'
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with([
                'error' => $exception->getMessage()
            ]);
        }
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
    public function update(UserRequest $request, string $id)
    {
        try {

            $user = User::find($id);
            if ($request->hasFile('avatar')) {
                $uploadedFile = $request->file('avatar');
                $filename = time() . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->storeAs('public/images', $filename);

                $oldAvatarPath = public_path('storage/images/' . $user->avatar);
                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }

                $user->avatar = $filename;
            }

            $user->name = $request->name;
            $user->username = $request->username;
            if ($request->district_id) {
                $user->district_id = $request->district_id;
            }
            $user->phone = preg_replace("/[^0-9]/", "", $request->get('phone'));
            if ($request->email) {
                $user->email = $request->email;
            }
            if ($request->has('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->dob = date('Y-m-d', strtotime($request->dob));

            $user->syncRoles([$request->role]);

            $user->syncPermissions([$request->permissions]);

            $user->update();
            return redirect()->back()->with([
                'success' => 'Ma`lumot tahrirlandi.'
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with([
                'error' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            if (!auth()->user()->hasPermissionTo('Фойдаланувчилар')) {
                return redirect()->back()->with([
                    'error' => 'Sizga ruhsat yo`q.'
                ]);
            }

            $user = User::find($id);
            $user->delete();

            $oldAvatarPath = public_path('storage/images/' . $user->avatar);
            if (file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }
            return redirect()->back()->with([
                'success' => 'Ma`lumot o`chirildi.'
            ]);
        } catch (QueryException $exception) {
            if ($exception->errorInfo[1] === 1451) {
                return redirect()->back()->with('error', 'Foydalanuvchi murojaatlarga bog`langan.');
            } else {
                return redirect()->back()->with('error', $exception->getMessage());
            }
        }
    }
}
