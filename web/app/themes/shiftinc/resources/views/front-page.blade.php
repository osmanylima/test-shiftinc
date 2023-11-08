@extends('layouts.app')

@section('content')

@php $page_home = get_page_by_title('Home'); @endphp

@include('partials.components.vitrine')

@include('partials.components.cards')

@include('partials.components.newsletter')

@endsection
