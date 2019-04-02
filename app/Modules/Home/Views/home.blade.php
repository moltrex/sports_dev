@extends('layouts.layout')
@section('style')

@endsection
@section('content')
{{-- @include('layouts.sidebar') --}}


<div class="content event-wrap">
    <div class="event-title">

    </div>
    <div class="event-content">
        


        <a href="#modal-view-event" class="erow">
            <span class="user-avatar"></span>
            <span class="author">
                <label for="">
                    Alexandrescu Vasile 
                </label>
                <span class="author-star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </span>
            </span>
            <span class="event-details">
                <var>Teren Primaverii</var>
                <br>
                <label for=""><i class="fas fa-map-marker-alt"></i> Iasi - 12 feb</label> 
            </span>
            <em class="event-need"><label for="">Avem nevoie de</label> <strong>1 jucator</strong></em> 
        </a>


    </div>
</div>


@endsection
@section('script')

@endsection