@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{route('lodges.index')}}">
                        <span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <tr>
                    <th colspan="2" style="text-align:center">Lodge Details</th>
                </tr>
                <tr><th>Lodge Name</th><td>{{$lodges->lodge_name}}</td></tr>
                <tr><th>Date of Registration</th><td>{{$lodges->created_at}}</td></tr>
            </table>
        </div>
    </div>
@endsection