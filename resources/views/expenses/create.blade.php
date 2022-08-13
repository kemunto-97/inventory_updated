@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Add Expense</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addexpenses" id="expenses" name="expenses">
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
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection
