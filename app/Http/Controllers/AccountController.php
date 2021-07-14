<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Product;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.index.form', ['list'=> Product::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.index.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'identityNumber' => 'required|max:10',
                'firstName' => 'required',
                'lastName' => 'required',
                'phone' => 'required',
            ],
            [
                'identityNumber.required' => 'Must be 10 character',
                'firstName.required' => 'Required',
                'lastName.required' => 'Required',
                'phone.required' => 'Required',
            ]
        );

        $request-> validate();
        $obj = new Account();
        $obj ->identityNumber = $request->get('identityNumber');
        $obj ->firstName = $request->get('firstName');
        $obj ->lastName = $request->get('lastName');
        $obj ->phone = $request->get('phone');
//        $obj ->gender = $request->get('gender');
        $obj ->save();
        return redirect('admin/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
