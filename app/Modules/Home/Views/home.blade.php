@extends('layouts.layout')
@section('style')

@endsection
@section('content')
{{-- @include('layouts.sidebar') --}}


<div class="content event-wrap">
    <div class="event-title">
        {{--<span>Echipe ce au nevoie de coechipieri. <b>Fii tu acela!</b></span>--}}
        <form action="" class="map-search">
            <input type="text" class="input-search" placeholder="Localitati dispponibile!">
            
            {{-- 
            <div class="map-search-list">
                <span data-value="Abrud">Abrud</span>
                <span>Agnita</span>
                <span>Aleșd</span>
                <span>Amara</span>
                <span>Brasov</span>
                <label>...</label>
            </div>
            --}}
            
            {{--<a href="javascript:;" class="submit-search"><i class="fas fa-search"></i></a>--}}
        </form>
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
                <var>Teren Primaverii - <b>tenis de camp</b></var>
                <br>
                <label for=""><i class="fas fa-map-marker-alt"></i> Iasi - 12 feb</label> 
            </span>
            <em class="event-need"><label for=""><i class="fas fa-user-plus"></i></label> <strong>1 jucator</strong></em> 
        </a>



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
                <var>Teren Primaverii - tenis de masa</var>
                <br>
                <label for=""><i class="fas fa-map-marker-alt"></i> Iasi - 12 feb</label> 
            </span>
            <em class="event-need"><label for=""><i class="fas fa-user-plus"></i></label> <strong>1 jucator</strong></em> 
        </a>



        <a href="#modal-view-event" class="erow">
            <span class="user-avatar"></span>
            <span class="author">
                <label for="">
                    Alexandrescu Vasile Octavian
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
                <var>Teren Primaverii - forbal</var>
                <br>
                <label for=""><i class="fas fa-map-marker-alt"></i> Iasi - 12 feb</label> 
            </span>
            <em class="event-need"><label for=""><i class="fas fa-user-plus"></i></label> <strong>1 jucator</strong></em> 
        </a>






    </div>
</div>


@endsection
@section('script')

@endsection