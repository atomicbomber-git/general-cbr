@extends('shared.layout')
@section('title', 'Manajemen Basis Kasus')
@section('content')
<div class="container my-5">
    <h1 class='mb-5'>
        <i class='fa fa-list'></i>
        Manajemen Basis Kasus
    </h1>

    <div class="card">
        <div class="card-header">
            <i class="fa fa-list"></i>
            Manajemen Basis Kasus
        </div>
        <div class="card-body">
           <div id="app">
               <verifiedcase-index raw_url="{{ route('verified_case.index_data') }}"/>
           </div>
        </div>
    </div>
</div>
@endsection