<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Companies::all();
        //dd($contacts);
        return view('company.index', compact('contacts'));
        //return view ('Company.index')->with($contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contacts = Companies::all();
        return view('company.create', compact('contacts'));
           // return view('company.create');
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
        $input = $request->all();
        //$input = $request->all();
        // dd($input);
        Companies::create($input);

        return redirect('company')->with('flash_message', 'Company details Addedd!');
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
        $contacts = Companies::find($id);
        return view('company.show', compact('contacts'));
        //return view('company.show')->with('company', $contact);
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
        $contacts = Companies::find($id);
        //dd($contacts);
        return view('company.edit', compact('contacts'));
        //return view('company.edit')->with('company', $contact);
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
        $contact = Companies::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('company')->with('flash_message', 'Company details Updated!');
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
        Companies::destroy($id);
        return redirect('company')->with('flash_message', 'Company details deleted!');
    }
}
