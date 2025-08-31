@extends('layouts.app')

@section('content')

    @if($section === 'all' || $section === 'hero')
        @include('layouts.partials.hero')
    @endif

    @if($section === 'all' || $section === 'about'||$section === 'skills')
        @include('layouts.partials.about')
    @endif


    @if($section === 'all' || $section === 'projects')
        @include('layouts.partials.projects')
    @endif

    @if($section === 'all' || $section === 'contact')
        @include('layouts.partials.contact')
    @endif

@endsection
