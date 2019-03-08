@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Edit</a>
        </li>
        <li class="active">Employee</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/employee/update" method="POST">
                @foreach ($data as $d)
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" class="form-control" name="id" value="{{ $d->id}}" />
                        <input type="hidden" name="_method" value="PUT" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{$d->name}}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="{{$d->address}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="your@mail.com" value="{{$d->email}}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="{{$d->phone}}">
                    </div>
                </div>
                <!-- /.box-body -->
                @endforeach
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection