<div class="modal fade" id="cheque_payment_status_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Change Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>

            <form action="{{ route('cheque-payment-status') }}" id="cheque-payment-status" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            @csrf

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cheque_payment_status" class="control-label">{{ __('Change Payment Status') }}</label>
                        <select name="cheque_payment_status" id="cheque_payment_status" class="custom-select" required>
                            <option value="Pending">{{ __('Pending') }}</option>
                            <option value="Complete">{{ __('Complete') }}</option>
                            <option value="Reject">{{ __('Reject') }}</option>
                        </select>
                    </div>
                </div><!-- Modal Body -->

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="hidden" name="cheque_payment_id" />
                    <button type="submit" class="btn btn-dark"><i class="fa fa-check"></i> {{ __('Change Status') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
