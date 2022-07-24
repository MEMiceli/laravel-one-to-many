@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$category->name}}</h1>
        </div>
        <div class="card-body">
            <div class="md-3">
                <a href="{{route('admin.categories.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div>
                <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>