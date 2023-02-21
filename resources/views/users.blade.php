@extends('layouts.app')

@section('title','User')

@section('header')
    @include('layouts.header')
@endsection

@section('user')
    @include('layouts.user', ['users'=>$users])
@endsection

@section('footer')
    @include('layouts.footer')
@endsection