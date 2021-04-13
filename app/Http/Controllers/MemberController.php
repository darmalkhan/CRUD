<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class MemberController extends Controller
{
    //
    function list(){
        $data = user::Paginate(8);
        // $data = user::all();
       return view('list',['users'=>$data]);
    }

    function delete($id){
        $data = user::find($id);
        $data->delete();
        return redirect('/');
    }
    function showdata($id){
        $data = user::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req){
        $data = user::find($req->id);
        $data->name=$req->name;
        $data->lastname=$req->lastname;
        $data->fname=$req->fname;
        $data->save();
        return redirect('/');

    }
    function addData(Request $req){
    $user = new User;
    $user ->name=$req->name;
    $user ->lastname=$req->lastname;
    $user ->fname=$req->fname;
    $user->save();
    return redirect('/');
    }
    function deleteAll()
    {
        user::truncate();
        return redirect('/');
    }
}
