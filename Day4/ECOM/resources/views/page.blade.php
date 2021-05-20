@extends('layouts.main')
@section('title', ucfirst($page))
@section('content')
    <div class="row mb-3">
        <div class="col-10">
            <h3>{{ ucfirst($page) }}</h3>
        </div>
        <div class="col-2">
            <a href="/create/{{ $page }}" class="btn btn-rounded btn-dark">Create new {{ $page }}</a>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                @foreach($data as $x)
                    <th scope="col">
                        {{ ucfirst(str_replace('_',' ',$x)) }}
                    </th> 
                @endforeach
                <th scope="col"></th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($data as $x)
                    <td scope="col">
                        {{ Str::random() }}
                    </td> 
                @endforeach
                <td scope="col"></td> 
            </tr> 
        </tbody>
    </table>
@endsection