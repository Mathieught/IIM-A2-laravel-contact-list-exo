@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
            <form action="{{route('contacts.store')}}" method="post">
                @csrf
                    <!-- TODO mise en place de la form pour créer un contact -->
                    <input type="text" name="name" value="{{old('name')}}">
                    <input type="text" name="tel" value="{{old('tel')}}">
                    <input type="text" name="email" value="{{old('email')}}">
                    <button type="submit">send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
