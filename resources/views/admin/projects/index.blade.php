@extends('layouts.app')

@section('content')
  <div class="container py-3">
    <h1 class="fs-2 fw-bold py-4">Projects</h1>
    <div class="row g-3">
        @foreach ($projects as $project)
        <div class="col-3">
            <div class="card h-100">
                <img @if ( $project->thumb == '' ) src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIU04WE68MpK7kIJ_kHfCEY5NFXNegUYUJ8-pFSM7uEg&s" @endif alt="">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $project->title }}</h5>
                    <p class="text-end">{{ $project->updated_at }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="py-3 d-flex justify-content-center">
        {{ $projects->links() }}
    </div>
  </div>
@endsection