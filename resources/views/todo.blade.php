@extends('master')

@section('todologic')
 
 {{-- <h5 class="card-title">Todo List</h5> --}}

     {{-- <input type="text" name="todo_item" placeholder="Add an item">
     <a href="#" class="btn btn-primary">Add</a> --}}

     @foreach ($tasks as $task)

       <form method="post" action ="/{{ $task->id }}">
           {{ method_field('DELETE') }} 
           {{csrf_field()}}

       <li>  {{$task->name}}    
       
        <button type="submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
       </button>
       
       </li>

       </form>


    @endforeach
     

    

@endsection

