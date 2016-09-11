@extends('layouts.master')
    
@section('title', 'Laravel scout')

@section('content')
    <div class="jumbotron">
        <h1>Cari Quote Inspirasi</h1>
        <form action="{{ route('search') }}" method="GET">
            {{ csrf_field() }}
            <div class="input-group">
            <input type="text" name="q" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Cari</button>
            </span>
            </div>
        </form>
    </div>
@endsection