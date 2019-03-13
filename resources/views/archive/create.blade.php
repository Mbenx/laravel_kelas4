@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Archive</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Create</a>
        </li>
        <li class="active">Archive</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Archive</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/archive/store" method="POST">                
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="_method" value="POST" />
                    </div>
                    <div class="form-group">
                        <label>Archive Name</label>
                        <input type="text" name="name" class="form-control" 
                        placeholder="Enter Name Of archive">
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