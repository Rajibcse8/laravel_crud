<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        Crud::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
    }

    
    public function show(Crud $crud)
    {
        //
    }

   
    public function edit(Crud $crud)
    {
        //
    }

    
    public function update(Request $request, Crud $crud)
    {
        //
    }

    
    public function destroy(Crud $crud)
    {
        //
    }
}
