@extends('layouts.admin-master')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                            <tr>
                                <th>PHOTO</th>
                                <th> PRODUCT NAME</th>
                                <th> Is_approved</th>
                                <th class="text-right">Created_by</th>
                                <th class="text-right">PRICE</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td><img src="{{asset('/uploads/products/').'/'.$report->photo}}" width="200px" height="200px"/></td>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->is_approve }}</td>
                                    <td class="text-right">{{$report->user[0]->name}}</td>
                                    <td>{{$report->price .' $'}}</td>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
