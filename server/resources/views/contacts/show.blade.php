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
                        {{$contact->title}}
                    </div>
                    <div>
                        {{$contact->contact}}
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{route('contacts.edit',[$contact->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-primary">編集する</button>
                        </form>
                        <form method="POST" action="{{route('contacts.destroy',[$contact->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger" data-id="{{$contact->id}}"
                               onclick="deletePost(this);">削除する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deletePost(e) {
            if (confirm('本当に削除してもいいですか？')) {
                document.getElementById(('delete_' + e.dataset.id).submit());
            }
        }
    </script>
@endsection
