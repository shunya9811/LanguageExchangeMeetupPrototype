@extends('layouts.app')

@section('title','Home')

@section('header')
    @include('layouts.header')
@endsection

@section('meetup')
    @include('layouts.meetup', ['meetups'=>$meetups])
@endsection

@section('user')
    @include('layouts.user', ['users'=>$users])
@endsection

@section('footer')
    @include('layouts.footer')
@endsection