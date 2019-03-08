@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
        </li>
        <li class="active">Employee</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <a href="/employee/create" type="button" class="btn btn-block btn-primary btn-lg">Add Data Employee</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->phone}}</td>
                        <td>
                            <a href="/employee/edit/{{$d->id}}">EDIT </a> |
                            <a href="/employee/delete/{{$d->id}}">DELETE </a>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection