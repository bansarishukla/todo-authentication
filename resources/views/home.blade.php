@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <task-list :tasks="{{ json_encode($tasks) }}" :user="{{$user}}"></task-list>
    </div>
  </div>
</div>
@endsection
