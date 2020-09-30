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
                                <th>date</th>
                                <th>name</th>
                                <th class="text-right">email</th>
                                <th class="text-right">Delete</th>
                                <th class="text-right">Update</th>
                                <th class="text-right">Kullanıcı indir</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->updated_at}}</td>
                                    <td>{{$user->name}}</td>
                                    <td class="text-right">{{$user->email}}</td>
                                    <td class="text-right"><button type="button" class="btn btn-primary" onclick="location.href='/sil/{{$user->id}}'">Sil</button></td>
                                    <td class="text-right"><button type="button" class="btn btn-primary" onclick="location.href='/guncelle/{{$user->id}}'">Güncelle</button></td>
                                    <td class="text-right"><a href="/indir">İNDİR</a></td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
