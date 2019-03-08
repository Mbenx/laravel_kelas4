@extends('layouts.master')

@section('content-header')
<section class="content-header">
        <h1>
            Dashboard
            <small>Home</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard">
                </i> Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ol>
    </section>    
@endsection

@section('content')
    <section class="content">
    <H2>Nama : {{$data}}</H2>
    <H2>Alamat : {{$alamat}}</H2>
    </section>
@endsection
