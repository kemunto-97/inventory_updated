@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CUSTOMERS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Customer') ? 'active':'' }}" href="javascript:void(0)">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" id="addCustomer" class="btn btn-primary">+ Add New Customer</button>
                </div>
              </a>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $count=1 ?>
                      @foreach($customer as $row)
                      <tr>
                          <td>{{$count++}}</td>
                          <td>{{$row['email']}}</td>
                          <td>{{$row['name']}}</td>
                          <td>{{$row['phone']}}</td>
                          <td>{{$row['created_at']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    
                </table>
                </div>
                </div>
            </div>

            <!-- Modal -->
              <div wire:ignore.self class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="customerModalLabel">Add Customer</h5>
                          </div>
                        <div class="modal-body">
                          <form id= "customerform" name= "customer">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="id">Email:</label>
                                  <input type="email" class="form-control" id="email" name="email">
                              </div>

                              <div class="form-group">
                                  <label for="name">Name:</label>
                                  <input type="text" class="form-control" id="name" name="name">
                              </div>

                              <div class="form-group">
                                  <label for="number">Phone:</label>
                                  <input type="number" class="form-control" id="phone" name="phone">
                              </div>

                              <div class="form-group">
                                  <button style="cursor:pointer" type="submit" id="saveBtn" class="btn btn-primary" >Submit</button>
                              </div>
                          </form>
                          </div>
                         
                      </div>
                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>

@endsection