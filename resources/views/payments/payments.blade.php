@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>PAYMENTS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Receive Payment') ? 'active':'' }}" href="javascript:void(0)">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" class="btn btn-primary" id="addPayment">+ Add New Payment</button>
                </div>
              </a>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Invoice Number</th>
                            <th>Transaction ID</th>
                            <th>Method</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count=1 ?>
                    @foreach($payment as $row)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$row['paycustomer']}}</td>
                        <td>{{$row['invoices_id']}}</td>
                        <td>{{$row['transaction_id']}}</td>
                        <td>{{$row['method']}}</td>
                        <td>{{$row['payamount']}}</td>
                        <td>{{$row['created_at']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Add Payment</h5>
                        </div>
                      <div class="modal-body">
                          <form id="payment" name="payment">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">Customer:</label>
                                <select type="text" class="form-control" id="paycustomer" name="paycustomer" required>
                                <option>SELECT CUSTOMER</option>
                                    @foreach($names as $row)
                                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id">Invoice Number:</label>
                                <select type="number" class="form-control" id="invoices_id" name="invoices_id" required>
                                  <option>SELECT CUSTOMER FIRST</option>
                                </select> 
                            </div>

                            <div class="form-group">
                                <label for="name">Mode of Payment:</label>
                                <select name="method" class="form-control" id="method" required>
                                    @foreach($modes as $row)
                                        <option value="{{$row['mode']}}">{{$row['mode']}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id">Transaction ID:</label>
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="payamount" name="payamount" required>
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="saveBtn" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End Modal -->

            </div>
          </div>
        </div>
      </div>

@endsection