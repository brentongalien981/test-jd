@extends('main')

@section('mainBody')
    <div class="container mainBody">
        <div class="row">


            @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ $photo->src }}">
                </div>
            @endforeach

        
        </div>
    </div>    
@endsection