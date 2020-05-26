<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class CrudController extends Controller
{
    //
    public function index(Request $request)
    {	
    	$data['accounts'] = Account::all();

    	return view('crud.index',$data);
    }

    public function save(Request $request)
    {
    	$account = new Account;
    	$account->fullName = $request->fullName;
    	$account->password = $request->password;
    	$account->save();

    	return back()->with('status', 'Successfully Saved');
    }

   	public function edit(Account $account) 
   	{
   		return view('crud.edit',["account" => $account]);
   	}

   	public function update(Account $account, Request $request)
   	{
   		$account->fullName = $request->fullName;
    	$account->password = $request->password;
    	$account->save();

    	return redirect('/')->with('status', 'Successfully Updated');
   	}

   	public function delete(Account $account)
   	{
   		$account->delete();

    	return back()->with('status', 'Successfully Deleted');
   	}
}
