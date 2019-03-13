@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Inventory</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
        </li>
        <li class="active">Inventory</li>
    </ol>
</section>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="/inventory/create" type="button" class="btn btn-block btn-primary btn-lg">Add Data Inventory</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Inventory</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Archive Name</th>
                    </tr>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{$d->id}}</td>
                        <td><a href="/inventory/show/{{$d->id}}">
                                {{$d->name}}
                            </a>
                        </td>
                        <td>{{$d->archive->name}}</td>
                        <td>
                            <a href="/inventory/edit/{{$d->id}}">EDIT </a> |
                            <a href="/inventory/delete/{{$d->id}}">DELETE </a>
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