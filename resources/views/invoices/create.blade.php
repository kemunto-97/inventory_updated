<!-- Modal -->
<div wire:ignore.self class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="invoiceModalLabel">Add Invoice</h5>
                        </div>
                        <div class="modal-body">
                        <form id="invoice" name="invoice">
                        {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Customer:</label>
                                <select name="order_receiver_name" class="form-control" id="order_receiver_name" required>
                                <option>SELECT CUSTOMER</option>
                                    @foreach($names as $row)
                                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id">Order ID:</label>
                                <select name="order_id" class="form-control" id="order_id" required>
                                        <option>SELECT CUSTOMER FIRST</option>
                                </select> 
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="order_total_amount_due" name="order_total_amount_due">
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary" id="saveBtn" >Generate</button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
<!-- End Modal -->