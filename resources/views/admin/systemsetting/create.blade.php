@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> </a> Organization Details
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
            <form action="{{ route('admin.systemsetting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="organization_name" class="form-label">Organization_Name</label>
                    <input type="text" class="form-control"
                        value="{{ old('organization_name', $systemsetting->organization_name ?? '') }}"
                        name="organization_name" id="organization_name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ old('email', $systemsetting->email ?? '') }}"
                        name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control" value="{{ old('address', $systemsetting->address ?? '') }}"
                        name="address" id="address">
                </div>
                <div>
                    <img src="{{ old('logo', $systemsetting->logo ?? '') }}" height="100" alt="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                <div class="mb-3">
                    <label for="pan_no" class="form-label">Pan_No</label>
                    <input type="number" class="form-control" value="{{ old('pan_no', $systemsetting->pan_no ?? '') }}"
                        name="pan_no" id="pan_no">
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone_Number</label>
                    <input type="number" class="form-control"
                        value="{{ old('phone_number', $systemsetting->phone_number ?? '') }}" name="phone_number"
                        id="phone_number">
                </div>
                <div class="mb-3">
                    <label for="telephone_number" class="form-label">Telephone_Number</label>
                    <input type="number" class="form-control"
                        value="{{ old('telephone_number', $systemsetting->telephone_number ?? '') }}" name="telephone_number"
                        id="telephone_number">
                </div>
                <div class="mb-3">
                    <label for="footer_description" class="form-label">Footer_Description</label>
                    <textarea class="form-control" name="footer_description" id="footer_description" cols="30" rows="10">{{ old('footer_description', $systemsetting->footer_description ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="map_url" class="form-label">Map_Url</label>
                    <input type="url" class="form-control" value="{{ old('map_url', $systemsetting->map_url ?? '') }}"
                        name="map_url" id="map_url">
                </div>
                <div class="mb-3">
                    <label for="facebook_url" class="form-label">Facebook_Url</label>
                    <input type="url" class="form-control"
                        value="{{ old('facebook_url', $systemsetting->facebook_url ?? '') }}" name="facebook_url"
                        id="facebook_url">
                </div>
                <div class="mb-3">
                    <label for="tiktok_url" class="form-label">Tiktok_Url</label>
                    <input type="url" class="form-control"
                        value="{{ old('tiktok_url', $systemsetting->tiktok_url ?? '') }}" name="tiktok_url"
                        id="tiktok_url">
                </div>
                <div class="mb-3">
                    <label for="instagram_url" class="form-label">Instagram_Url</label>
                    <input type="url" class="form-control"
                        value="{{ old('instagram_url', $systemsetting->instagram_url ?? '') }}" name="instagram_url"
                        id="instagram_url">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
@endsection
