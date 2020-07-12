@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($contacts as $contact)
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">index</div>
                        <div>
                            <div>{{$contact->id}}</div>
                            <div>{{$contact->name}}</div>
                            <button onclick="location.href='{{route('contacts.show',['id' => $contact->id])}}'"
                                    type="button" class="btn btn-info">
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button onclick="location.href='{{route('contacts.create')}}'"
                type="button" class="btn btn-info">新規作成</button>
    </div>
@endsection
