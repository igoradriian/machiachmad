@extends('en.layouts.app')
@section('title', 'Beranda')

@section('content')
@include('en.pages.sections.hero')
@include('en.pages.sections.whyus')
@include('en.pages.sections.caselist')
@include('en.pages.sections.cta')
@endsection