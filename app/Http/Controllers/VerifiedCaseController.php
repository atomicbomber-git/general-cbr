<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifiedCaseController extends Controller
{
    public function index()
    {
        return view('verified_case.index');
    }
    
    public function create()
    {
    }
    
    public function store()
    {   
    }
    
    public function edit(CaseRecord $verified_case)
    {
    }
    
    public function update(CaseRecord $verified_case)
    {
    }
    
    public function delete(CaseRecord $verified_case) {
    }
}
