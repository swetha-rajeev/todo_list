@extends('master')

@section('todologic')

    Todo List

     @foreach ($tasks as $task)

       <li>  {{$task->name}}    </li>

    @endforeach
     

    

@endsection

