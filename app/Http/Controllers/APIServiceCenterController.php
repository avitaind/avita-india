<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\APIServiceCenter;


class APIServiceCenterController extends Controller
{
    public function index(Request $request)
    {
        if(strlen($request->city)>0)
            {
                $result =APIServiceCenter::Where('city','like','%'. $request->city . '%')->get();
            } 
            else{
                $result = APIServiceCenter::get();
            }
            if(strlen($request->state)>0)
            {
                $result =APIServiceCenter::Where('state','like','%'. $request->state . '%')->get();
            } 
            else{
                $result = APIServiceCenter::get();
            } if(strlen($request->pin)>0)
            {
                $result =APIServiceCenter::Where('pin','=', $request->pin)->get();
            } 
            else{
                $result = APIServiceCenter::get();
            }   
        return $result;
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new APIServiceCenter;
        $post ->locale       = $request->locale;
        $post ->name         = $request->name;
        $post ->phone        = $request->phone;
        $post ->address      = $request->address;
        $post ->opening_hour = $request->opening_hour;
        $post ->email        = $request->email;
        $post ->city         = $request->city;
        $post ->state        = $request->state;
        $post ->pin          = $request->pin;

        $result = $post->save();

        If($result)
        {
            return ["result"=>"Add Data"];
        }
        else{
            return ["result"=>"failed "];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = APIServiceCenter::find($id);
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post                = APIServiceCenter::find($id);
        $post ->locale       = $request->locale;
        $post ->name         = $request->name;
        $post ->phone        = $request->phone;
        $post ->address      = $request->address;
        $post ->opening_hour = $request->opening_hour;
        $post ->email        = $request->email;
        $post ->city         = $request->city;
        $post ->state        = $request->state;
        $post ->pin          = $request->pin;

        $result = $post->save();

        If($result)
        {
            return ["result"=>"Update Data"];
        }
        else{
            return ["result"=>"failed "];
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post   = APIServiceCenter::find($id);
        $result = $post ->delete();
        if($result){
            return["result"=>"Data Delete"];
        }
        else{
            return["result"=>"failed"];
        }
    }
}


