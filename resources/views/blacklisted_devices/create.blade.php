@extends('layouts.app')

@section('content')
<div class="wrapper create-device form-style">
    <h1 class="bg-dark">Report Lost Device</h1>
    <form action="/devices" method="POST">
    @csrf
        <label for="name">name</label>
        <input type="text" id="name" name="name"/>
        <label for="brand">brand</label>
        <input type="text" id="brand" name="brand"/>
        <label for="model">model</label>
        <input type="text" id="model" name="model"/>
        <label for="serial_number">serial_number</label>
        <input type="text" id="serial_number" name="serial_number"/>
        <label for="imei_number">imei_number</label>
        <input type="text" id="imei_number" name="imei_number"/>
        <a href="https://www.google.com/android/find?u=0">Don't know your IMEI.click here</a>
        <label for="ob_number">ob_number</label>
        <input type="text" id="ob_number" name="ob_number"/>
        <label for="area">area</label>
        <input type="text" id="area" name="area"/>
        <div class="d-flex justify-content-center">
            <input class="bg-dark text-white w-50 hover-zoom" type="submit" value="Report"/>
        </div>
    </form>
</div>
@endsection