@extends('layouts.app')
@section('title','Student | Edit')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('students.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('students.update', $student->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName:</strong>
                <input type="text" name="studname" id="studname" class="form-control" value="{{$student->studname}}" placeholder="Student Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" id="course" class="form-control" value="{{$student->course}}" placeholder="Course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="fee" id="fee" class="form-control" value="{{$student->fee}}" placeholder="fee">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection