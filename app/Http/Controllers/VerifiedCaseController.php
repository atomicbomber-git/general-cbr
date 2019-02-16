<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaseRecord;
use App\Http\Resources\CaseRecord as CaseRecordResource;
use App\Feature;
use Spatie\QueryBuilder\QueryBuilder;

class VerifiedCaseController extends Controller
{
    public function index()
    {
        $features = Feature::select('id')->get();
        return view('verified_case.index', compact('features'));
    }

    public function indexData()
    {
        $query = CaseRecord::query()
            ->with('case_record_features:case_record_id,feature_id,value');

        $result = QueryBuilder::for($query)
            ->paginate(10);

        return CaseRecordResource::collection($result);
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
