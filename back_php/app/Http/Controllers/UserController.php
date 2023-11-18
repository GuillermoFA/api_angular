<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            \Log::info('Showing user list');
            return response()->json(User::get(), 200);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) // SHOW
    {
        $user = User::with('userInterest','userFramework','userInfoUser','userDataPersonal','userDataURL')->find($id);
        return response()->json($user);
    }
}

