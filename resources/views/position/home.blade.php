@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Position</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
        </li>
        <li class="active">Position</li>
    </ol>
</section>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="/position/create" type="button" class="btn btn-block btn-primary btn-lg">Add Data Position</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Position</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$d->id}}</td>
                        <td><a href="/position/show/{{$d->id}}">
                                {{$d->name}}
                            </a>
                        </td>
                        <td>Nama Departement</td>
                        <td>
                            <a href="/position/edit/{{$d->id}}">EDIT </a> |
                            <a href="/position/delete/{{$d->id}}">DELETE </a>
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