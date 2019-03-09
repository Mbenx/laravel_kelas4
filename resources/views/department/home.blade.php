@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Department</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
        </li>
        <li class="active">Department</li>
    </ol>
</section>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="/department/create" type="button" class="btn btn-block btn-primary btn-lg">Add Data Department</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Department</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$d->id}}</td>
                        <td><a href="/department/{{$d->id}}">
                                {{$d->name}}
                            </a>
                        </td>
                        <td>
                            <a href="/department/edit/{{$d->id}}">EDIT </a> |
                            <a href="/department/delete/{{$d->id}}">DELETE </a>
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