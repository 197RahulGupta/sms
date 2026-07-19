<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])

</head>

<body>

   @include('pages.header')
    <section class="about">
        <div class="container">
            <div class="col-md-12 px-3 pt-5">
                <div class="d-flex gap-5">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <h4 class="fs-6 bg-peach text-danger rounded-pill px-3 py-2 button-hover">Premier Academic
                                Institution</h4>

                        </div>
                        <div class="pt-3">
                            <h1 class="col-md-12 fs-1 fw-bold">{{ $about?->title }}</h1>
                            <h6 class="lh-base text-secondary">{{ $about?->description }}</h6>
                        </div>
                        <div class="container text-center bg-white shadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="row">
                                <div class="col border-end">
                                    <h2 class="fs-2 text-danger">{{ $about?->employment_rate }}% </h2>
                                    <h5 class="fs-6">EMPLOYMENT RATE</h5>
                                </div>
                                <div class="col border-end">
                                    <h2 class="fs-2 text-danger"> {{ $about?->student_ratio }}</h2>
                                    <h5 class="fs-6"> STUDENT RATIO</h5>
                                </div>
                                <div class="col order-1">
                                    <h2 class="fs-2 text-danger">{{ $about?->program_offer }}+ </h2>
                                    <h5 class="fs-6">PROGRAMS OFFERED</h5>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex gap-3">
                            <a href=""
                                class="bg-danger rounded-3 px-4 py-2 button-red-hover shadow p-3 rounded">
                                Begin Your Journey
                            </a>
                            <a href=""
                                class="bg-white text-dark rounded-3 px-4 py-2 button-white-hover shadow p-3 rounded ">
                                Virtual Campus Tour
                            </a>
                        </div>

                    </div>
                    <div class="col-md-6" data-aos="zoom-in">
                        <img class="about-image" src="{{ $about->image }}" alt="" srcset="">
                    </div>


                </div>

            </div>


        </div>
    </section>
    <section class="feature">
        <div class="container">
            <div class="col-md-12 px-3 pt-5">

                <div class="row g-3">
                    @foreach ($features as $feature)
                        <div class="col-md-4" data-aos="fade-up-right">
                            <div class="card card-border h-500 py-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-pink card-icon px-3 py-4 col-3 col-md-4 text-center rounded-4">
                                            <i class="{{ $feature->icons }} text-danger fs-3 "></i>
                                        </div>
                                        <h1 class="fs-1 text-secondary fw-bold mb-0">0{{$loop?->iteration}}</h1>
                                    </div>
                                    <h5 class="card-title">{{$feature?->title}}</h5>
                                    <p class="card-text">{{$feature?->description}}</p>
                                    <a href="#" class="card-link text-danger">Explore Program <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   

                </div>
            </div>
        </div>
    </section>
    <section class="upcoming-event">
        <div class="container mt-5"data-aos="zoom-in-up">
            <div class="col-md-12 px-3 py-3 mt-4 bg-white  rounded-3 border-start border-danger border-5">
                <div class="d-flex gap-4">
                    <div class="">
                        <div class="bg-danger rounded-3 date text-center">
                            <h1 class="fs-5 pt-2 text-white">NOV</h1>
                            <h1 class="fs-1 text-white">15</h1>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-4 ">

                            <h4 class="fs-6 bg-peach text-danger rounded-pill px-5 py-2 button-hover">Upcoming Event
                            </h4>

                        </div>
                        <h2 class="fs-4">Autumn Open House & Campus Experience Day</h2>
                        <h6 class=" fs-6 lh-base text-secondary">Discover state-of-the-art facilities, connect with
                            distinguished faculty, and explore
                            scholarship opportunities available to incoming students.</h6>
                    </div>
                    <div class="class=col-md-2">
                        <h5 class="bg-danger text-white rounded-pill px-5 py-2 button-hover text-center fs-6">Reserve
                            Your Seat</h5>
                        <h2 class="fs-6 lh-base text-secondary"><i class="fa-solid fa-clock text-danger"></i>only 3
                            Weeks away</h2>

                    </div>
                </div>
    </section>

    <section class="about2">
        <div class="container">
            <div class="col-md-12 px-3 pt-5">
                <div class="row g-3">
                    <div class="col-md-6 ">
                        <img class="about-image" src="{{ asset('assets/frontend/image/about1-image.webp') }}">
                    </div>
                    <div class="col-md-6 text-left">

                        <h1 class="fs-4 text-danger"><i class="fa-solid fa-arrow-right-long"></i>
                            Who We Are</h1>
                        <h1 class="fs-1">Shaping Futures Through Knowledge & Discovery</h1>
                        <h4 class="fs-6 lh-base text-secondary">Pellentesque habitant morbi tristique senectus et netus
                            et malesuada fames ac turpis egestas. Curabitur non nulla sit amet nisl tempus convallis
                            quis ac lectus.
                            Proin eget tortor risus viverra maecenas accumsan lacus vel facilisis</h4>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div
                                    class="card cardhover border-0 border-top border-5 border-danger h-300 py-2 rounded-4">
                                    <div class="card-body">
                                        <div class="justify-content-between align-items-center mb-3">
                                            <i class="fs-1 fa-solid fa-bullseye"></i>
                                            <div class="mt-4">
                                                <h5 class="card-title">Our Mission</h5>
                                                <p class="card-text">Sed porttitor lectus nibh. Nulla quis
                                                    lorem ut libero
                                                    malesuada feugiat praesent sapien massa convallis a
                                                    pellentesque nec.
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="card cardhover border-0 border-top border-5 border-danger h-300 py-2 rounded-4">
                                    <div class="card-body">
                                        <div class="justify-content-between align-items-center mb-3 gap-2">
                                            <i class="fs-1 fa-solid fa-bullseye"></i>
                                            <div class="mt-4">
                                                <h5 class="card-title">Our Vision</h5>
                                                <p class="card-text">Curabitur aliquet quam id dui posuere blandit.
                                                    Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="py-5 ">
        <div class="container text-center">

            <h2 class="fw-bold mb-5" style="color: #1a365d;">Key Milestones</h2>

            <div class="row position-relative g-4">

                <div class="d-none d-md-block position-absolute start-0 end-0 top-0 translate-middle-y"
                    style="height: 2px; background: linear-gradient(to right, rgba(199,59,67,0) 0%, rgba(199,59,67,0.4) 15%, rgba(199,59,67,0.4) 85%, rgba(199,59,67,0) 100%); margin-top: 14px; z-index: 1;">
                </div>

                <div class="col-md-3 position-relative" style="z-index: 2;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle border border-3 mb-4"
                        style="width: 26px; height: 26px; border-color: #e1a6a9 !important;">
                        <div class="rounded-circle" style="width: 8px; height: 8px; background-color: #c93b43;"></div>
                    </div>
                    <h3 class="display-6 fw-bold mb-2" style="color: #c93b43;">1965</h3>
                    <h5 class="fw-bold text-dark mb-2 fs-5">Foundation Laid</h5>
                    <p class="text-muted small px-3">Etiam at tincidunt arcu pellentesque habitant morbi tristique
                        senectus et netus fames.</p>
                </div>

                <div class="col-md-3 position-relative" style="z-index: 2;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle border border-3 mb-4"
                        style="width: 26px; height: 26px; border-color: #e1a6a9 !important;">
                        <div class="rounded-circle" style="width: 8px; height: 8px; background-color: #c93b43;"></div>
                    </div>
                    <h3 class="display-6 fw-bold mb-2" style="color: #c93b43;">1982</h3>
                    <h5 class="fw-bold text-dark mb-2 fs-5">National Recognition</h5>
                    <p class="text-muted small px-3">Donec dignissim odio ac imperdiet luctus ante nisl accumsan justo
                        nec tempus augue.</p>
                </div>

                <div class="col-md-3 position-relative" style="z-index: 2;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle border border-3 mb-4"
                        style="width: 26px; height: 26px; border-color: #e1a6a9 !important;">
                        <div class="rounded-circle" style="width: 8px; height: 8px; background-color: #c93b43;"></div>
                    </div>
                    <h3 class="display-6 fw-bold mb-2" style="color: #c93b43;">1998</h3>
                    <h5 class="fw-bold text-dark mb-2 fs-5">Global Expansion</h5>
                    <p class="text-muted small px-3">Suspendisse potenti nullam lacinia dictum auctor phasellus euismod
                        sem imperdiet tincidunt.</p>
                </div>

                <div class="col-md-3 position-relative" style="z-index: 2;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle border border-3 mb-4"
                        style="width: 26px; height: 26px; border-color: #e1a6a9 !important;">
                        <div class="rounded-circle" style="width: 8px; height: 8px; background-color: #c93b43;"></div>
                    </div>
                    <h3 class="display-6 fw-bold mb-2" style="color: #c93b43;">2010</h3>
                    <h5 class="fw-bold text-dark mb-2 fs-5">Research Hub</h5>
                    <p class="text-muted small px-3">Vestibulum ultrices magna ut faucibus sollicitudin sed eget
                        venenatis enim nec imperdiet.</p>
                </div>

            </div>
        </div>
    </section>
    <section class=" mt-4">
        <div class="container">
            <div class="col-md-12 px-3 pt-5">
                <div class="row"data-aos="fade-up">
                    <div class="col-md-3">
                        <div class="card border-0 border-start border-5 border-danger h-100 py-4 rounded-4">
                            <div class="card-body">
                                <div class="d-flex gap-3">

                                    <h1 class="fs-3 text-secondary fw-bold mb-0">01</h1>
                                    <div>
                                        <h5 class="card-title">Academic Excellence</h5>
                                        <p class="card-text">Vivamus magna justo lacinia eget consectetur sed convallis
                                            at tellus nunc porttitor.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 border-start border-5 border-danger h-100 py-4 rounded-4">
                            <div class="card-body">
                                <div class="d-flex gap-3">

                                    <h1 class="fs-3 text-secondary fw-bold mb-0">02</h1>
                                    <div>
                                        <h5 class="card-title">Community Engagement</h5>
                                        <p class="card-text">Praesent sapien massa convallis a pellentesque nec egestas
                                            non
                                            nisi tempus convallis.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 border-start border-5 border-danger h-100 py-4 rounded-4">
                            <div class="card-body">
                                <div class="d-flex gap-3">

                                    <h1 class="fs-3 text-secondary fw-bold mb-0">03</h1>
                                    <div>
                                        <h5 class="card-title">Innovation</h5>
                                        <p class="card-text">Curabitur arcu erat accumsan id imperdiet et porttitor at
                                            sem ultricies magna justo.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 border-start border-5 border-danger h-100 py-4 rounded-4">
                            <div class="card-body">
                                <div class="d-flex gap-3">

                                    <h1 class="fs-3 text-secondary fw-bold mb-0">04</h1>
                                    <div>
                                        <h5 class="card-title">Global Perspective</h5>
                                        <p class="card-text">Praesent sapien massa convallis a pellentesque nec egestas
                                            non
                                            nisi tempus convallis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-2">
        <div class="container">
            <div class="container text-center my-5">
                <h2 class="fw-bold text-dark mb-3">Featured Programs</h2>

                <div class="position-relative mx-auto border-bottom border-secondary-subtle mb-4"
                    style="width: 200px; height: 2px;">
                    <div class="bg-danger position-absolute top-50 start-50 translate-middle"
                        style="width: 40px; height: 4px; border-radius: 2px;"></div>
                </div>

                <p class="text-muted col-md-8 mx-auto">
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
                </p>
            </div>
    </section>


    <section class="about3">
        <div class="container">
            <div class="col-md-12 mt-4 bg-white">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img class="border-0 border-start border-5 border-danger section-image"
                            src="{{ asset('assets/frontend/image/about2-image.webp') }}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <h1 class="fs-4 text-danger">Featured Program</h1>
                        <h1 class="fs-1">Computer Science & Innovation
                        </h1>
                        <h4 class="fs-6 text-secondary">Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                            esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                            pariatur.</h4>
                        <div class="d-flex gap-3 mt-3">
                            <a href="" class="bg-peach text-dark rounded-3 px-4 py-2 shadow p-3 rounded">
                                <i class="text-danger fa-solid fa-user-group"></i> 620+Enrolled
                            </a>
                            <a href="" class="bg-peach text-dark rounded-3 px-4 py-2 shadow p-3 rounded ">
                                <i class=" text-danger fa-solid fa-trophy"></i> 98% Placement
                            </a>
                            </a>
                            <a href="" class="bg-peach text-dark rounded-3 px-4 py-2 shadow p-3 rounded ">
                                <i class=" text-danger fa-solid fa-clock"></i> 4 Years
                            </a>


                        </div>
                        <div class="mt-3">
                            <div class="mt-3">
                                <a href="#" class="card-link text-danger">Explore Program <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <section class="mt-4">
        <div class="container">
            <!-- Replaced gap-3 with g-4 (gutter) -->
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-3">
                    <!-- Removed style="width: 18rem;" -->
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/about3-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-5 text-danger">Master's Degree</h5>
                            <h5 class="card-title">Strategic Leadership</h5>
                            <p class="fs-7 card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit laboriosam.</p>
                            <a href="#" class="card-link text-secondary">View Details <i
                                    class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/about4-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-6 text-danger">CERTIFICATE</h5>
                            <h5 class="fs-6 card-title">Media & Communications</h5>
                            <p class="fs-7 card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat.</p>
                            <a href="#" class="card-link text-secondary">View Details <i
                                    class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/about5-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-6 text-danger">BACHELOR'S DEGREE</h5>
                            <h5 class="fs-6 card-title">Biomedical Research</h5>
                            <p class="fs-7 card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit.</p>
                            <a href="#" class="card-link text-secondary">View Details <i
                                    class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/about6-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-6 text-danger">BACHELOR'S DEGREE</h5>
                            <h5 class="fs-6 card-title">Visual & Performing Arts</h5>
                            <p class="fs-7 card-text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet
                                consectetur adipisci.</p>
                            <a href="#" class="card-link text-secondary">View Details <i
                                    class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-2">
        <div class="container">
            <div class="container text-center my-5">
                <h2 class="fw-bold text-dark mb-3">STUDENTS LIFE BLOCK</h2>

                <div class="position-relative mx-auto border-bottom border-secondary-subtle mb-4"
                    style="width: 200px; height: 2px;">
                    <div class="bg-danger position-absolute top-50 start-50 translate-middle"
                        style="width: 40px; height: 4px; border-radius: 2px;"></div>
                </div>

                <p class="text-muted col-md-8 mx-auto">
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
                </p>
            </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="col-md-12 px-3 pt-5">
                <div class="d-flex gap-5">
                    <div class="col-md-6 px-3 border-0 border-start border-5 border-danger pt-2">
                        <h4 class="fs-6 text-danger">
                            <i class="fa-solid fa-graduation-cap"></i> Campus Experience
                        </h4>
                        <div class="pt-3">
                            <h1 class="col-md-12 fs-1 fw-bold">Curabitur blandit tempus ardua sed magna aliqua viverra
                            </h1>
                            <h6 class="lh-base text-secondary">Maecenas sed diam eget risus varius blandit sit amet non
                                magna. Donec id elit non mi porta gravida at eget metus. Fusce dapibus tellus ac cursus
                                commodo.</h6>
                            <div class="pt-4 d-flex  mt-4 cardhover bg-peach px-4 gap-3">
                                <div class="rounded-circle w-40  bg-danger my-3 px-2 py-2 ">

                                    <i class="fa-solid fa-calendar-check text-white"></i>
                                </div>
                                <div>
                                    <h2 class="fs-4">Seasonal Gatherings</h2>
                                    <h4 class=" fs-7 text-secondary">Nemo enim ipsam voluptatem quia voluptas sit</h4>



                                </div>


                            </div>
                            <div class="gap-4 pt-4 d-flex  mt-4 cardhover bg-peach px-4">
                                <div class="rounded-circle w-40  bg-danger my-3 px-2 py-2 ">

                                    <i class="fa-solid fa-trophy text-white"></i>
                                </div>

                                <div>
                                    <h2 class="fs-4">Merit Recognitions</h2>
                                    <h4 class=" fs-7 text-secondary">Quis autem vel eum iure reprehenderit qui in
                                    </h4>

                                </div>


                            </div>
                            <div class="d-flex gap-5 pt-3">
                                <a href=""
                                    class="bg-danger rounded-3 px-4 py-2 button-red-hover shadow p-3 rounded">
                                    Explore further
                                </a>
                                <h1 class="fs-6 text-danger px-4 py-2">
                                    <i class="fa-solid fa-video text-danger button-white-hover fs-5"></i> watch Campus
                                    Tour
                                </h1>


                            </div>
                        </div>

                    </div>
                    <div>
                        <img class="about7-image" src="{{ asset('assets/frontend/image/about7-image.webp') }}"
                            class="card-img-top" alt="...">
                    </div>


                </div>
            </div>
        </div>

    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-md-12 px-4 py-3 pt-5 bg-peach d-flex rounded-4 text-center">
                <div class="col-md-3">
                    <i class="fa-solid fa-users text-danger"></i>
                    <h1 class="fs-4 fw-bolder">3200+</h1>
                    <h4 class="fs-6 text-secondary">Enrolled Scholars</h4>
                </div>

                <div class="col-md-3">
                    <i class="fa-solid fa-users"></i>
                    <h1 class="fs-4 fw-bolder">180+</h1>
                    <h4 class="fs-6 text-secondary">Course Programs</h4>
                </div>
                <div class="col-md-3">
                    <i class="fa-solid fa-users"></i>
                    <h1 class="fs-4 fw-bolder">45+</h1>
                    <h4 class="fs-6 text-secondary">Global Partners</h4>
                </div>
                <div class="col-md-3">
                    <i class="fa-solid fa-users"></i>
                    <h1 class="fs-4 fw-bolder">98+</h1>
                    <h4 class="fs-6 text-secondary">Satisfaction Rate</h4>

    </section>
    <section class="mt-5">
        <div class="container">
            <!-- Replaced gap-3 with g-4 (gutter) -->
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-3">
                    <!-- Removed style="width: 18rem;" -->
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/academic-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-5 ">Academic Clubs</h5>

                            <p class="fs-7 card-text">Ut enim ad minima veniam quis nostrum exercitationem ullam
                                corporis</p>
                            <a href="#" class="card-link text-secondary">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/research-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-5">Research Initiatives</h5>
                            <p class="fs-7 card-text">Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit
                                fugit.</p>
                            <a href="#" class="card-link text-secondary">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/volunteer-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-5">Volunteer Work</h5>
                            <p class="fs-7 card-text">Sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore.</p>
                            <a href="#" class="card-link text-secondary">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card cardhover h-100">
                        <img src="{{ asset('assets/frontend/image/creative-image.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="fs-5">Creative Studios</h5>
                            <p class="fs-7 card-text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.
                            </p>
                            <a href="#" class="card-link text-secondary">Learn More<i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-2">
        <div class="container">
            <div class="container text-center my-5">
                <h2 class="fw-bold text-dark mb-3">Testimonials</h2>

                <div class="position-relative mx-auto border-bottom border-secondary-subtle mb-4"
                    style="width: 200px; height: 2px;">
                    <div class="bg-danger position-absolute top-50 start-50 translate-middle"
                        style="width: 40px; height: 4px; border-radius: 2px;"></div>
                </div>

                <p class="text-muted col-md-8 mx-auto">
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
                </p>
            </div>
    </section>
    <section class="footer py-4">
        <div class="container-fluid bg-blue text-white py-4">
            <div class="d-flex col-md-12 px-5 pt-2 ">
                <div class="col-md-4">
                    <h1 class="fs-2">Unipulse</h1>
                    <h1 class="in-base fs-7 text-secondary">Cras fermentum odio eu feugiat lide par naso tierra. Justo
                        eget nada terra videa
                        magna derita valies darta donna mare fermentum iaculis eu non diam phasellus</h1>

                </div>
                <div class="col-md-2">
                    <h1 class="fs-4">Useful Links</h1>
                    <h2 class="fs-6">Home</h2>
                    <h2 class="fs-6">About us</h2>
                    <h2 class="fs-6">Services</h2>
                    <h2 class="fs-6">Terms service</h2>
                    <h2 class="fs-6">Privacy policy</h2>

                </div>
                <div class="col-md-3">

                    <h1 class="fs-4">Our Services</h1>
                    <h2 class="fs-6">Web Design</h2>
                    <h2 class="fs-6">Web Development</h2>
                    <h2 class="fs-6">Product Management</h2>
                    <h2 class="fs-6">Marketing</h2>
                    <h2 class="fs-6">Graphic Design</h2>

                </div>
                <div class="col-md-3">

                    <h1 class="fs-3">Context Us</h1>
                    <h2 class="fs-6">A 108 Adam street</h2>
                    <h2 class="fs-6">New York,NY 535022</h2>
                    <h2 class="fs-6">United States</h2>
                    <h2 class="fs-6">Phone:+1 5589 55488 55</h2>
                    <h2 class="fs-6">Email:info@example.com</h2>

                </div>
            </div>

        </div>

        </div>

    </section>



</body>

</html>
