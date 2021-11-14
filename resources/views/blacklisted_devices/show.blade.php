@extends('layouts.app')

@section('content')
<div class="overlay"></div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <!--Device Resullt-->
        <div class="col-sm-10 col-lg-12 col-md-12">
            <div>
                {{$device->id}}
                {{$device->name}}
            </div>
        </div>
        
</div>
@endsection
