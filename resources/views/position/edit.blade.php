@extends('layouts.master')

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Position</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">
                </i> Edit</a>
        </li>
        <li class="active">Position</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Position</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/position/update" method="POST">                
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" class="form-control" name="id" value="{{ $data->id}}" />
                        <input type="hidden" name="_method" value="PUT" />
                    </div>
                    <div class="form-group">
                        <label>Position Name</label>
                        <input type="text" name="name" class="form-control" 
                        placeholder="Enter Name Of Department" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control select2" name="department_id" style="width: 100%;">
                            <option selected="selected" value="{{$data->department->id}}">
                                {{$data->department->name}}
                            </option>
                            @foreach ($dept as $dpt)
                                @if ($dpt->id != $data->department->id)
                                <option value="{{$dpt->id}}">
                                    {{$dpt->name}}
                                </option>                                    
                                @endif 
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