@extends('layouts.app')
@section('content')
    <h1 class="text-center my-5">TODOS PAGE</h1>
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        ToDos
                    </div>
                </div>
        
                <div class="card-body">
                    <div class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}

                                {{-- <button class="btn btn-primary btn-sm float-right">View</button> --}}

                                
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
       </div>
   </div>
@endsection