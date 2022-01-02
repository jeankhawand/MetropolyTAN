<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Events\UserCoordinates;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
    /**
     * store user coordinates
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update_coordinates(Request $request)
    {
        ddd($request->all());
        $lat = $request->input('lat');
        $long = $request->input('long');
        $user = auth()->user();
        $user->lat = $lat;
        $user->long = $long;
        $user->save();
        $location = ["lat"=>$lat, "long"=>$long];
        event(new UserCoordinates(auth()->user,$location));
        return response()->json(['status'=>'success', 'data'=>$location]);
    }
}
