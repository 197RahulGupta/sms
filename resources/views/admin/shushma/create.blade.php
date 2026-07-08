@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Shushma Create Page
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
            <form>
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle1" aria-describedby="titleHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleInputImage1" aria-describedby="imageHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleEmploymentRate1" class="form-label">Employment Rate</label>
                    <input type="text" class="form-control" id="exampleEmploymentRate1" aria-describedby="employmentRateHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputStudentRatio1" class="form-label">Student Ratio</label>
                    <input type="text" class="form-control" id="exampleInputStudentRatio1" aria-describedby="studentRatioHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputProgramOffer1" class="form-label">Program Offer</label>
                    <input type="text" class="form-control" id="exampleInputProgramOffer1" aria-describedby="programOfferHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Descrription</label>
                    <textarea name="description" id="exampleInputDescription1" cols="30" rows="10"></textarea>
                </div>
               
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
@endsection
