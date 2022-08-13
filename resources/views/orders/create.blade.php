@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>New Order</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addorder" id="orders" name="orders">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Product Size:</label>
                            <input type="number" class="form-control" id="product_size" name="product_size">
                        </div>

                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>

                        <div class="form-group">
                            <label for="amount">Product Price:</label>
                            <input type="number" class="form-control" id="product_price" name="product_price">
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