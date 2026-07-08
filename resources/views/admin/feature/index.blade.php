@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.feature.create') }}" class="btn btn-sm btn-primary">+</i></a>
                <span class=" text-white me-2">
                </span> Feature Create Page
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($features as $feature)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $feature->title }}</td>
                            <td>{{ $feature->icons }} </td>
                        
                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.feature.edit', $feature) }}" class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>

                                <form action="{{ route('admin.feature.destroy',$feature) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure want to delete')"
                                        class="btn btn-sm btn-danger text-white">
                                        <i class="fa fa-window-close-o icon-sm text-white align-middle"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
