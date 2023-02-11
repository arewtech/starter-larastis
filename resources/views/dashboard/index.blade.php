@extends('template.app')
@section('title', 'Blank Page')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blank Page &mdash; Stisla</h1>
        </div>
        <!-- content -->
        <div class="section-body">
            <h5>Welcome in the Larastis, <b class='text-dark'>{{ auth()->user()->email }}</b></h5>
        </div>
    </section>
@endsection
