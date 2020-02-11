@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact : <b> {{$contact->name}} </b></h3>
                <form action="{{route('contacts.update' , ['contact' => $contact] )}}" method="post">
                    @csrf
                    @method("put")
                        <!-- TODO mise en place de la form pour créer un contact -->
                        <input type="text" name="name" value="{{ $contact->name }}">
                        <input type="text" name="tel" value="{{ $contact->tel }}">
                        <input type="text" name="email" value="{{ $contact->email }}">
                        <button type="submit">send</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
