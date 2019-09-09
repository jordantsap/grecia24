@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description', __('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact us, more info,')

@section('breadcrumbs')
    {{ Breadcrumbs::render('terms') }}
@endsection

@section('content')
  <h1>Terms Content</h1>
@endsection
