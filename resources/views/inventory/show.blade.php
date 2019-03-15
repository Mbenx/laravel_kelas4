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
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pengguna {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>description</th>
                    </tr>
                    @foreach ($data->employee as $d)

                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->pivot->created_at}}</td>
                        <td>{{$d->pivot->description}}</td>
                    </tr>

                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection