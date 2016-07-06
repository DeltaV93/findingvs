@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
  <h1>edit project page</h1>
  <h2>{{ $project->project_title }}</h2>
  {{-- 

  Pull in form partial 
  Change button to update per barabel 
  
   --}}
@endsection