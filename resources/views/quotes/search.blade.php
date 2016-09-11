@extends('layouts.master')
    
@section('title', 'Hasil pencarian')

@section('content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Brand
                </a>
            </div>
            <form action="{{ route('search') }}" class="navbar-form navbar-left">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="q" class="form-control" value="{{ $query  }}">
                </div>
                <button type="submit" class="btn btn-default">Cari</button>
            </form>
        </div>
    </nav>
    <div>
    @foreach($results as $result)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{ $result->quote }}</h4>
        </div>
    </div>
    @endforeach
    </div>
@endsection