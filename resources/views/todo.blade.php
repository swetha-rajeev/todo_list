@extends('master')

@section('todologic')
 
 {{-- <h5 class="card-title">Todo List</h5> --}}

     @foreach ($tasks as $task)

       <li>  {{$task->name}}    

       <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
       </button>


       </li>


    @endforeach
     

    

@endsection

