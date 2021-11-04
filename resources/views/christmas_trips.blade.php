@extends('layouts.template')

@section('title', 'Christmas Offers')

@section('content')
    <ul class="list-group list-group-flush">
        @foreach ($trips as $trip)
            <li class="list-group-item">{{$trip->name}} - {{$trip->date}} - {{$trip->location}} - {{$trip->number_of_people}} people - {{$trip->inclusions}} - {{$trip->price}}$ <br> {{$trip->description}}</li>
        @endforeach
    </ul>
        
    
@endsection


{{-- $table->string('location', 100);
            $table->dateTime('date', $precision = 0);
            $table->tinyInteger('number_of_people')->unsigned();
            $table->string('inclusions', 100);
            $table->text('description');
            $table->smallInteger('price')->unsigned(); --}}