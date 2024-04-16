@extends('front.layout')
@section('content')

            <div class="row">
                <div class="col-xxl-12">
                    <div class="page-title">
                        <h4>Security</h4>
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
                                <div class="col-xxl-12">
                                    <div class="card no-shadow h-unset">
                                        <div class="card-header">
                                            <h4 class="card-title">2-step verification</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="verify-content">
                                                <div class="d-flex align-items-center">
                              <span
                                  class="me-3 icon-circle bg-primary text-white"
                              ><i class="icofont-ui-touch-phone"></i
                                  ></span>
                                                    <div class="primary-number">
                                                        <p class="mb-0">
                                                            <strong>+xxx xxxxxxxx60</strong>
                                                        </p>
                                                        <small
                                                        >Keep your primary phone number
                                                            up-to-date</small
                                                        >
                                                        <br />
                                                        <span class="text-success">Required</span>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-primary">
                                                    Manage
                                                </button>
                                            </div>
                                            <hr class="dropdown-divider my-4" />
                                            <div class="verify-content">
                                                <div class="d-flex align-items-center">
                              <span
                                  class="me-3 icon-circle bg-primary text-white"
                              ><i class="icofont-email"></i
                                  ></span>
                                                    <div class="primary-number">
                                                        <p class="mb-0">
                                                            <strong>hello@example.com</strong>
                                                        </p>
                                                        <small
                                                        >Keep your primary email up-to-date</small
                                                        >
                                                        <br />
                                                        <span class="text-success">Required</span>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-primary">
                                                    Manage
                                                </button>
                                            </div>
                                            <hr class="dropdown-divider my-4" />
                                            <div class="verify-content">
                                                <div class="d-flex align-items-center">
                              <span
                                  class="me-3 icon-circle bg-primary text-white"
                              ><i class="icofont-lock"></i
                                  ></span>
                                                    <div class="primary-number">
                                                        <p class="mb-0">
                                                            <strong>*************</strong>
                                                        </p>
                                                        <small>You can change your password</small>
                                                        <br />
                                                        <span class="text-success">Required</span>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-primary">
                                                    Manage
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="card no-shadow h-unset">
                                        <div class="card-header">
                                            <h4 class="card-title">Identity verification</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="verify-content">
                                                <div class="d-flex align-items-center">
                              <span
                                  class="me-3 icon-circle bg-primary text-white"
                              ><i class="icofont-id"></i
                                  ></span>
                                                    <div class="primary-number">
                                                        <p class="mb-0">xxx xxxxx xxx40</p>
                                                        <small>Social Security Number</small>
                                                        <br />
                                                        <span class="text-success">Verified</span>
                                                    </div>
                                                </div>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-toggle="modal"
                                                    data-target="#idCardModal"
                                                >
                                                    Manage
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="card no-shadow h-unset">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                Use 2-step verification to secure your transactions
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="#">
                                                <div class="col-12">
                                                    <div class="form-check form-switch mb-3">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            id="s1"
                                                            checked
                                                        />
                                                        <label class="form-check-label" for="s1"
                                                        >Any amount of cryptocurrency
                                                            <b class="text-success">Most secure</b></label
                                                        >
                                                    </div>
                                                    <div class="form-check form-switch mb-3">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            id="s2"
                                                            checked
                                                        />
                                                        <label class="form-check-label" for="s2"
                                                        >Over 1.2000 BTC per day</label
                                                        >
                                                    </div>

                                                    <div class="form-check form-switch mb-3">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            id="s3"
                                                            checked
                                                        />
                                                        <label class="form-check-label" for="s3"
                                                        >Never
                                                            <b class="text-danger">Least secure</b></label
                                                        >
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="btn btn-success">Save</button>
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

<!-- Modal -->
<div
    class="modal fade"
    id="idCardModal"
    tabindex="-1"
    aria-labelledby="idCardModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="idCardModalLabel">
                    Upload your ID card
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form action="verify-step-3.html" class="identity-upload">
                    <div class="identity-content">
                        <span>(Driving License or Government ID card)</span>

                        <p>
                            Uploading your ID helps as ensure the safety and security of
                            your founds
                        </p>
                    </div>

                    <div class="form-group">
                        <label class="me-sm-2">Upload Front ID </label>
                        <span class="float-right">Maximum file size is 2mb</span>
                        <div class="file-upload-wrapper" data-text="front.jpg">
                            <input
                                name="file-upload-field"
                                type="file"
                                class="file-upload-field"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="me-sm-2">Upload Back ID </label>
                        <span class="float-right">Maximum file size is 2mb</span>
                        <div class="file-upload-wrapper" data-text="back.jpg">
                            <input
                                name="file-upload-field"
                                type="file"
                                class="file-upload-field"
                            />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-success"
                    data-dismiss="modal"
                    data-toggle="modal"
                    data-target="#successIdCardModal"
                >
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div
    class="modal fade"
    id="successIdCardModal"
    tabindex="-1"
    aria-labelledby="successIdCardModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successIdCardModalLabel">Success</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <div class="card-body">
                        <form action="verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-email"></i></span>
                                <h5>Identity Verified</h5>
                                <p>
                                    Congrats! your identity has been successfully verified and
                                    your investment limit has been increased.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush
