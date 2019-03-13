@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Archive</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
        </li>
        <li class="active">Archive</li>
    </ol>
</section>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="/archive/create" type="button" class="btn btn-block btn-primary btn-lg">Add Data archive</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Archive</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Inventory Name</th>
                    </tr>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$d->id}}</td>
                        <td><a href="/archive/show/{{$d->id}}">
                                {{$d->name}}
                            </a>
                        </td>
                        <td>{{$d->inventory->name}}</td>
                        <td>
                            <a href="/archive/edit/{{$d->id}}">EDIT </a> |
                            <a href="/archive/delete/{{$d->id}}">DELETE </a>
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