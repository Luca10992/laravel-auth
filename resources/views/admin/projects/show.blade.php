@extends('layouts.app')

@section('content')
  <div class="container py-3">
    <h1 class="fs-2 fw-bold py-4">{{ $project->title }}</h1>
    <div class="show-container d-flex gap-3">
        <div class="w-50">
            <img class="w-100" @if ( $project->thumb == '' ) src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIU04WE68MpK7kIJ_kHfCEY5NFXNegUYUJ8-pFSM7uEg&s" @endif alt="">
        </div>
        <div class="w-50 d-flex flex-column justify-content-between">
            <h5>Descrizione: <p class="d-inline">{{ $project->description }}</p></h5>
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0">Data di pubblicazione: <p class="d-inline m-0">{{ $project->updated_at }}</p></h6>
                <a href="https://github.com/Luca10992?tab=repositories" target="blank">
                    <button class="btn btn-secondary">Vai al progetto</button>
                </a>
            </div>
        </div>
    </div>
  </div>
@endsection