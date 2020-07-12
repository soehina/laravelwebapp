@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">contactform</div>

                    <div class="card-body">
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{route('contacts.store')}}">
                            @csrf
                            <input class="input-group" type="text" name="name" placeholder="Name">
                            <input class="input-group" type="text" name="email" placeholder="Mail">
                            男性：<input type="radio" name="gender" value="0">
                            女性：<input type="radio" name="gender" value="1">
                            <input class="input-group" type="text" name="title" placeholder="Title">
                            <textarea class="input-group" name="contact" placeholder="Contact">
                        </textarea>

                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
