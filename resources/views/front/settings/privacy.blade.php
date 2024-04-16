@extends('front.layout')
@section('content')

    <div class="row">
        <div class="col-xxl-12">
            <div class="page-title">
                <h4>Privacy</h4>
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
                        <div class="col-xl-12">
                            <div class="card no-shadow h-unset">
                                <div class="card-header">
                                    <h4 class="card-title">Privacy options</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Instant sends</h5>
                                    <p class="mb-1">
                                        Allow other users to see that you use Qash and send
                                        you crypto instantly
                                    </p>
                                    <div class="form-check form-switch mt-3">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="s8"
                                            checked
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="card no-shadow h-unset">
                                <div class="card-header">
                                    <h4 class="card-title">Your Qash account</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        You have a number of rights over your personal data.
                                        For more detailed information on these choices,
                                        please read our full
                                        <a href="#">Privacy Policy</a> and our
                                        <a href="#">Cookie Policy</a>.
                                    </p>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>Request Data</h5>
                                        <p>
                                            Request a copy of my personal data held by Qash.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request data</a
                                        >
                                    </div>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>Request Deletion</h5>
                                        <p>Request deletion of some or all of my data</p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request deletion</a
                                        >
                                    </div>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>Request export</h5>
                                        <p>
                                            Request export of my data in a machine-readable
                                            form.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request data export</a
                                        >
                                    </div>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>Request Correction</h5>
                                        <p>
                                            Request to correct, modify, or complete my data.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request correction</a
                                        >
                                    </div>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>
                                            Request Restriction of Processing (EU and Japan
                                            Residents only)
                                        </h5>
                                        <p>
                                            Request that Qash stops processing my personal
                                            data.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request restriction</a
                                        >
                                    </div>

                                    <hr class="dropdown-divider my-4" />

                                    <div class="privacy-content">
                                        <h5>Manage Cookies</h5>
                                        <p>Manage your cookie preferences.</p>
                                        <a href="#" class="btn btn-outline-primary"
                                        >Request cookies</a
                                        >
                                    </div>
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
@endpush
