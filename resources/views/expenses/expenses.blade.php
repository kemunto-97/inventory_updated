@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>EXPENSES</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Expense') ? 'active':'' }}" href="javascript:void(0)">
                <div class="form-group">
                  <button style="cursor:pointer" id="addExpense" type="submit" class="btn btn-primary">+ Add New Expense</button>
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
                            <th>Expense</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count=1 ?>
                    @foreach($expenses as $row)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$row['expense']}}</td>
                        <td>{{$row['amount']}}</td>
                        <td>{{$row['created_at']}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
                </div>
            </div>

                <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="expenseModalLabel">Add Expense</h5>
                        </div>
                        <div class="modal-body">
                          <form id="expenses" name="expenses">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Expense:</label>
                                <input type="text" class="form-control" id="expense" name="expense">
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount">
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" id="saveBtn" type="submit" class="btn btn-primary">Submit</button>
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