@extends('layouts.app')
@section('content')
    <div class="container  flex-md-column justify-content-center align-items-center">
        <div class=" main welcome">
            <h1 class="text-dark display-1 text-center">
                WellCome
            </h1>
            <div class="row mt-5" >
                <div class="col-12">
                    <a href="{{Route('indexRoute')}}" class="btn btn-dark btn-block">Show books list</a>
                </div>
            </div>
        </div>
    </div>

@endsection
