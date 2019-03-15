@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Inventory</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Create</a>
        </li>
        <li class="active">Inventory</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Inventory</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/inventory/store" method="POST">                
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="_method" value="POST" />
                    </div>
                    <div class="form-group">
                        <label>Inventory Name</label>
                        <input type="text" name="name" class="form-control" 
                        placeholder="Enter Name Of Department">
                    </div>
                    <div class="form-group">
                        <label>Archive</label>
                        <select class="form-control select2" name="archive_id" style="width: 100%;">
                            <option selected="selected">Please Select</option>
                            @foreach ($data as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach                          
                        </select>
                      </div>                
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection