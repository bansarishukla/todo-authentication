@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
    {{-- @foreach ($user->tasks as $task)
        <li>{{ $task->body }}</li>
    @endforeach --}}
        {{-- <task-list></task-list> --}}
        <task-list tasks="{{ $tasks }}" user="{{ $user }}"></task-list>
        {{-- <task-list :task_list="'{!! json_encode($tasks) !!}'"></task-list> --}}
   </div>
 </div>
</div>
@endsection
