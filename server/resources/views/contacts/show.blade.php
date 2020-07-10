@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">show</div>

                    <div>
                        {{$contact->name}}
                    </div>
                    <div>
                        {{$gender}}
                    </div>
                    <div>
                        {{$contact->contact}}
                    </div>

                    <div class="card-body">
                        <form method="POST" action=>
                            @csrf

                            <input class="btn btn-primary" type="submit" value="Change">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
