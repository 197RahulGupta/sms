@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.introduction.create') }}" class="btn btn-sm btn-primary">+</i></a>
                <span class=" text-white me-2">
                </span> Introduction Create Page
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
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($introductions as $introduction)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $introduction->title }}</td>
                          <td><img src="{{ $introduction->image }}" height="100" alt=""> </td>
                        
                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.introduction.edit', $introduction) }}" class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>

                                <form action="{{ route('admin.introduction.destroy',$introduction) }}" method="post">
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
