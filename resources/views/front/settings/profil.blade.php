@extends('front.layout')
@section('content')

    <div class="row">
        <div class="col-xxl-12 col-xl-12">
            <div class="page-title">
                <h4>Profile</h4>
            </div>
            <div class="card h-unset">
                <div class="card-header">
                    <div class="settings-menu">
                        <a href="{!! route('back.setting-profil') !!}">Profile</a>
                        <a href="{!! route('back.setting-application') !!}">Application</a>
                        <a href="{!! route('back.setting-security') !!}">Security</a>
                        <a href="{!! route('back.setting-activity') !!}">Activity</a>
                        <a href="{!! route('back.setting-privacy') !!}">Privacy</a>
                        <a href="{!! route('back.setting-fees') !!}">Fees</a>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="card no-shadow">
                                <div class="card-header">
                                    <h4 class="card-title">User Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-12">
                                                <div class="d-flex align-items-center">
                                                    <img
                                                        class="me-3 rounded-circle me-0 me-sm-3"
                                                        src="{{ asset("storage/$user->photo") }}"
                                                        width="55"
                                                        height="55"
                                                        alt=""
                                                    />
                                                    <div class="media-body">
                                                        <h4 class="mb-0">{!! $user->first_name !!}</h4>
                                                        <p class="mb-0">Max file size is 20mb</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="form-file">
                                                    <input
                                                        name="photo"
                                                        type="file"
                                                        class="form-file-input"
                                                        id="customFile"
                                                    />
                                                    <label
                                                        class="form-file-label"
                                                        for="customFile"
                                                    >
                                    <span class="form-file-text"
                                    >Choose file...</span
                                    >
                                                        <span class="form-file-button">Browse</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <button class="btn btn-success waves-effect">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="card no-shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-12">
                                                <label class="form-label">New Password</label>
                                                <input
                                                    value="password"
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="**********"
                                                />
                                                <small class="mt-2 mb-0 d-block"
                                                >Enable two factor authencation on the
                                                    security page
                                                </small>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-success waves-effect">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="card no-shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <form class="personal_validate" method="POST">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Your Name</label>
                                                <input
                                                    value="{!! $user->first_name !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Jannatul Maowa"
                                                    name="first_name"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Your LastName</label>
                                                <input
                                                    value="{!! $user->last_name !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Jannatul Maowa"
                                                    name="last_name"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Your Phone</label>
                                                <input
                                                    value="{!! $user->phone !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Jannatul Maowa"
                                                    name="phone"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Email</label>
                                                <input
                                                    value="{!! $user->email !!}"
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Hello@example.com"
                                                    name="email"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Date of birth</label>
                                                <input
                                                    value="{!! $user->date_born !!}"
                                                    type="date"
                                                    class="form-control hasDatepicker"
                                                    placeholder="10-10-2020"
                                                    id="datepicker"
                                                    autocomplete="off"
                                                    name="date_born"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label"
                                                >Present Address</label>
                                                <input
                                                    value="{!! $user->address !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="56, Old Street, Brooklyn"
                                                    name="presentaddress"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label"
                                                >Permanent Address</label
                                                >
                                                <input
                                                    value="{!! $user->address !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="123, Central Square, Brooklyn"
                                                    name="permanentaddress"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">City</label>
                                                <input
                                                    value="{!! $user->city !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="New York"
                                                    name="city"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Postal Code</label>
                                                <input
                                                    value="{!! $user->postal_code !!}"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="25481"
                                                    name="postal"
                                                />
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Country</label>
                                                <select class="form-select" name="country_id">
                                                    <option value="">Select</option>
                                                    @foreach($countries as $country)
                                                    <option value="{!! $country->id !!}" @if($user->country_id==$country->id) selected @endif>
                                                        {!! $country->name !!}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <button
                                                    class="btn btn-success pl-5 pr-5 waves-effect"
                                                >
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{!! asset("front/vendor/apexchart/apexcharts.min.js") !!}"></script>

@endpush
