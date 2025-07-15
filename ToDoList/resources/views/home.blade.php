@extends('master')
@section('title')
📝 To-Do List
@endsection

@section('action')
action="{{route('toDoList.addTask')}}"
@endsection

@section('button')
Add
@endsection