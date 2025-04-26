@extends('layouts.layout')
@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Products</p>
                        <h6 class="mb-0">{{ $totalproducts }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Test Passed</p>
                        <h6 class="mb-0">{{ $passproduct }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Test Failed</p>
                        <h6 class="mb-0">{{ $failproduct }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Pending Tests</p>
                        <h6 class="mb-0">{{ $pendingproduct }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Approved Products</p>
                        <h6 class="mb-0">{{ $totalusers }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Rejected Products</p>
                        <h6 class="mb-0">{{ $totalusers }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Users Table Start -->
    <div id="users" class=" container-fluid pt-4 px-4 section">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Users Table</h6>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Reg Date</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>
                                            @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}" alt="User Image"
                                                    width="40" height="40" class="rounded-circle">
                                            @else
                                                <img src="{{ asset('images/default-user.png') }}" alt="Default Image"
                                                    width="40" height="40" class="rounded-circle">
                                            @endif
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->role == 0)
                                                {{ 'Admin' }}
                                            @elseif($user->role == 1)
                                                {{ 'Technician' }}
                                            @elseif($user->role == 2)
                                                {{ 'CPRI' }}
                                            @else
                                                {{ 'User' }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->role == 0)
                                                {{ 'Admin' }}
                                            @elseif($user->role == 1)
                                                {{ 'Lab Technician' }}
                                            @elseif($user->role == 2)
                                                {{ 'CPRI Officials' }}
                                            @else
                                                {{ 'User' }}
                                            @endif
                                        </td>
                                        <td>{{ $user->email_verified_at }}</td>
                                        <td>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users Table End -->

    <!-- Testimonials -->
    <div class="container-fluid pt-4 px-4 mb-5">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Testimonial</h6>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-1.jpg"
                                style="width: 100px; height: 100px" />
                            <h5 class="mb-1">AbuSufyan</h5>
                            <p>Profession</p>
                            <p class="mb-0">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed
                                dolor stet amet eirmod eos labore diam
                            </p>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-2.jpg"
                                style="width: 100px; height: 100px" />
                            <h5 class="mb-1">Client Name</h5>
                            <p>Profession</p>
                            <p class="mb-0">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed
                                dolor stet amet eirmod eos labore diam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                        style="
                    filter: grayscale(100%) invert(92%) contrast(83%);
                    border: 0;
                  "></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
