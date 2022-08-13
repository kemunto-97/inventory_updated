@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ORDERS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='New Order') ? 'active':'' }}" href="javascript:void(0)">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" class="btn btn-primary" id="addOrder">+ Add New Order</button>
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
                            <th>Product Size</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count=1 ?>
                    @foreach($orders as $row)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$row['product_size']}}</td>
                        <td>{{$row['product_name']}}</td>
                        <td>{{$row['product_price']}}</td>
                        <td>{{$row['created_at']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderModalLabel">Add Order</h5>
                        </div>
                      <div class="modal-body">
                        <form id="orders" name="orders">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Customer:</label>
                                <select name="order_name" class="form-control" id="order_name" required>
                                <option>SELECT CUSTOMER</option>
                                    @foreach($names as $row)
                                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id">Product Size:</label>
                                <input type="text" class="form-control" id="product_size" name="product_size">
                            </div>

                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <select name="product_name" class="form-control" id="product_name" required>
                                    @foreach($products as $row)
                                        <option value="{{$row['name']}}">{{$row['name']}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount">Product Price:</label>
                                <input type="number" class="form-control" id="product_price" name="product_price">
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary" id="saveBtn">Submit</button>
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