@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title', 'View Timekeeping')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>
                            Attendance for May 25, 2021
                        </h4>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col"></th>
                                    <th class="text-muted" scope="col">Reg In</th>
                                    <th class="text-muted" scope="col">Reg Out</th>
                                    <th class="text-muted" scope="col">Reg Hr</th>
                                    <th class="text-muted" scope="col">OT Hr</th>
                                    <th class="text-muted" scope="col">Night Diff Hr</th>
                                    <th class="text-muted" scope="col">Early Hr</th>
                                    <th class="text-muted" scope="col">Tardy Hr</th>
                                    <th class="text-muted" scope="col">Double Pay</th>
                                    <th class="text-muted" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <img width="50px" src="https://xsodia.space/payroll/assets/16281099.jpg" alt="">
                                        <br>
                                        <small>Kenneth Abenojar</small>
                                    </th>
                                    <td>
                                        <input type="time" class="form-control">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control">
                                    </td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-dark">Save</button>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection