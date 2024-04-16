    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Withdraw</h5>
                <a class="btn-close"
                   data-dismiss="modal"
                   aria-label="Close" rel="modal:close"></a>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <form  class="identity-upload" method="POST" action="{!! route('back.withdraw') !!}">
                        @csrf
                        <div class="">
                            <div class="col-12 mt-2">
                                <label class="form-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text">{!! auth()->user()->country->phonecode !!}</span>
                                <input name="phone" type="text" class="form-control" placeholder="phone">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label">FullName</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icofont-user-alt-1"></i></span>
                                <input name="name" type="text" class="form-control" placeholder="Fullname">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label">Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text">FCFA</span>
                                <input name="amount" type="text" class="form-control" placeholder="Amount" autocomplete="false">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Continue</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



