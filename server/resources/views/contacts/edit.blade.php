@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">contactform</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('contacts.update',['id'=>$contact->id])}}">
                            @csrf
                            <input class="input-group" type="text" name="name" value="{{$contact->name}}">
                            <input class="input-group" type="text" name="email" value="{{$contact->email}}">
                            男性：<input type="radio" name="gender" value="0" @if($contact->gender===0)checked @endif>
                            女性：<input type="radio" name="gender" value="1" @if($contact->gender===1)checked @endif>
                            <input class="input-group" type="text" name="title" value="{{$contact->title}}">
                            <textarea class="input-group" name="contact">{{$contact->contact}}</textarea>

                            <input class="btn btn-primary" type="submit" value="更新する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
