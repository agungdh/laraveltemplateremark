@extends('layouts.template')

@section('content')

@if(Auth::check())
	Berhasil Login
@else
	Gagal Login
@endif
@endsection