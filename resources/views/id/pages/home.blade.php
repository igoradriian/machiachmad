@extends('id.layouts.app')
@section('title', 'Beranda')

@section('content')
@include('id.pages.sections.hero')
@include('id.pages.sections.whyus')
@include('id.pages.sections.caselist')
@include('id.pages.sections.cta')
@endsection