@extends('layouts.main')

@section('content')

   <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="customerModalLabel">Add Customer</h5>

                          </div>
                        <div class="modal-body">
                          <form id= "customer" name= "customer">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="id">Email:</label>
                                  <input type="number" class="form-control" id="email" name="email">
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
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                          </div>
                      </div>
                  </div>
              </div>

@endsection
