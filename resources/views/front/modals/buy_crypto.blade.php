<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Confirmation Buy {!! $crypto->name !!}</h5>
            <a class="btn-close"
                data-dismiss="modal"
                aria-label="Close" rel="modal:close"></a>
        </div>
        <div class="modal-body">
            <div class="auth-form">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><span class="text-primary">Your Address</span></td>
                            <td><span class="text-primary">@if(isset($wallet)) {{$wallet->address}} @else Your not have wallet for {!! $crypto->symbol !!} @endif</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-primary">Quantity({!! $crypto->symbol !!})</span></td>
                            <td>
                                <span class="text-primary">{!! $quantity !!}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Exchange Rate</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Fee</td>
                            <td>00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>{!! $amount !!} FCFA</td>
                        </tr>
                        <tr>
                            <td>Vat</td>
                            <td>
                                <div class="text-danger">0.0 FCFA</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td>{!! $amount !!} FCFA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              <form  class="identity-upload" method="POST" action="{!! route("back.buy_modal") !!}">
                    @csrf
                    <div class="identity-content">
                        <div class="text-center mt-4">
                            <input hidden value="{!! $amount !!}" name="amount">
                            <input hidden value="{!! $quantity !!}" name="quantity">
                            <input hidden value="{!! $crypto->id !!}" name="crypto_id">
                            @if(isset($wallet))  <button type="submit" class="btn btn-primary btn-block" >Confirm</button> @else  <button type="button" class="btn btn-primary btn-block" disabled>Please create your wallet</button> @endif

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
