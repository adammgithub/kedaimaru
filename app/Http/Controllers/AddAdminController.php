<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\AddAdmin;
use Illuminate\Support\Facades\Hash;

class AddAdminController extends Controller
{
    public function index(){
    	$addadmin = DB::table('users')->where('is_admin', '1' )->get();
    	return view('addadmins.index', ['addadmin'=>$addadmin]);
    }

    public function create(){
    	$addadmin = DB::table('users')->where('is_admin', '1' )->get();
    	return view('addadmins.create', ['addadmin'=>$addadmin]);
    }

    public function store(Request $request)
	{
    //VALIDASI REQUESTNYA
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|min:8'



    ]);
    $addadmin = DB::table('users');
    $addadmin = AddAdmin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 1,
        ]);
    return redirect(route('addadmin.index'))->with(['success' => 'Admin Baru Telah Ditambahkan']);
}
	public function destroy($id){
		 $addadmin = AddAdmin::find($id);
		  $addadmin->delete();
		   return redirect(route('addadmin.index'))->with(['success' => 'Admin Telah Dihapus']);
	}
    public function edit($id){
        $addadmin = AddAdmin::find($id);
        return view('addadmins.edit', compact('addadmin'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
        'id' => 'required|numeric|unique:users,id',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8|confirmed',
    ]);

        $addadmin = AddAdmin::find($id);
        $addadmin->name = request('name');
        $addadmin->email = bcrypt(request('password'));
        $addadmin->save();

        return redirect(route('addadmin.index'))->with(['success' => 'Data Admin Diperbaharui']);

        
    }
}
