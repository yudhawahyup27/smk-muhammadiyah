@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('content')
<h3>Selamat Datang {{ $user->name }}</h3>
@endsection
