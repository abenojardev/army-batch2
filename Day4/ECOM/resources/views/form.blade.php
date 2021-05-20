@extends('layouts.main')
@section('title', 'Create '.ucfirst($page))
@section('content')
<div class="row mb-3">
    <div class="col-12 text-center">
        <h3>Create {{ ucfirst($page) }}</h3>
    </div>
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <form>
            @foreach($data as $x)
                <div class="mb-3">
                    <label class="form-label">
                        {{ ucfirst(str_replace('_',' ',$x)) }}
                    </label>
                    <input class="form-control"> 
                </div>  
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>
@endsection