    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deposits</h5>
                <a class="btn-close"
                   data-dismiss="modal"
                   aria-label="Close" rel="modal:close"></a>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <form method="POST" action="{!! route('back.deposit') !!}">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text">{!! auth()->user()->country->phonecode !!}</span>
                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    placeholder=""/>
                            </div>

                        </div>
                        <div class="col-12">
                            <label class="form-label">Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">FCFA</span>
                                <input
                                    id="currency_sell"
                                    type="text"
                                    name="amount"
                                    class="form-control"
                                    placeholder="EX:15000"
                                />
                            </div>

                        </div>
                        <div class="col-12">
                            <label class="form-label">Receive Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">FCFA</span>
                                <input id="currency_receive"
                                       type="text"
                                       name="currency_amount"
                                       class="form-control" readonly
                                       placeholder=""/>
                            </div>

                        </div>
                        <div class="col-12 mt-3">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block">
                                Start
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



