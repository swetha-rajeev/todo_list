<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Todo List')</title>

        <!-- Bootstrap CDN -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
          body,html {
              height: 100%;
           }
           body {
            display:flex;
             align-items:center;
            }
            input[type=text]{
                width:80%;
            }
        </style>

    </head>
    <body>
            
            <div class="container text-muted mx-auto">
                <div class = "card w-80 border-light">
                    <form method ="post" action ="/">
                        {{ csrf_field() }}
                    <div class="card-header text-center">
                        Todo List
                        
                    </div>
                    <div class="card-header">
                     <input type="text" name="todo_item" placeholder="Add an item">
                     <button type="submit">Add</button>
                     <!-- <a href="#" class="btn btn-primary">Add</a> -->

                    </div>
                    </form>

                    <div class="card-body">
                    <form method="delete" action " ">

                   @yield('todologic')
                    </form>
          </div>
        </div>
    </div>
    </form>
        <!-- Bootstrap Javascript -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
