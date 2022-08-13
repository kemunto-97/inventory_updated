@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>PRODUCTS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Product') ? 'active':'' }}" href="javascript:void(0)">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" id="addProduct" class="btn btn-primary">+ Add New Product</button>
                </div>
              </a>
            </div>            
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showProducts" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count=1 ?>
                    @foreach($products as $row)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$row['name']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                      <div class="modal-body">
                            <form id="product" name="product">
                            {{ csrf_field() }}
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Product</label>
                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                                  </div>
                               </div>

                               <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Submit</button>
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