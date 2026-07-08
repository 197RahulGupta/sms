@extends('layout.master')
@section('container')


 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                  <a href="{{ route('admin.sushma.create')}}" class="btn btn-primary">+</a>
                <span class=" text-white me-2">
                </span> Shushma Index Page
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
          </div>

@endsection