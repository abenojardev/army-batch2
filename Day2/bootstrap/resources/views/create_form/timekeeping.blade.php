@php $active = 'timekeeping' @endphp 
@extends('layouts.main')
@section('title', 'Create Timekeeping')
@section('content')

    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Create Timekeeping 
                        </h4>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" id="inputEmail4">
                            </div> 
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection