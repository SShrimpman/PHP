@extends('master.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Hello World</h1>
            </div>
        </div>
    </div>

    @component('components.cards.cards')
    @endcomponent

@endsection
