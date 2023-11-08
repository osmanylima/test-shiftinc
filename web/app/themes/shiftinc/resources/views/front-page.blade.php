@extends('layouts.app')

@section('content')

@include('partials.components.vitrine')
@include('partials.components.agendamento')
@include('partials.components.usuarios')
@include('partials.components.calendario')
@include('partials.components.relatorios')
@include('partials.components.concorrentes')

@endsection
