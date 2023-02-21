@extends('layouts.app')

@section('title','Meetup')

@section('header')
    @include('layouts.header')
@endsection

@section('meetup')
    @include('layouts.meetup', ['meetups'=>$meetups])
@endsection

@section('footer')
    @include('layouts.footer')
@endsection