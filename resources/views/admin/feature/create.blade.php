@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.feature.index') }}">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> </a> Feature Create Page
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container p-5 bg-white">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.feature.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputTitle1"
                        aria-describedby="titleHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Icon</label>
                    <input type="text" class="form-control" name="icons" id="exampleInputImage1"
                        aria-describedby="imageHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Description</label>
                    <textarea name="description" id="exampleInputDescription1" cols="30" rows="10"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
@endsection
