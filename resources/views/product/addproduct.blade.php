@extends('layouts.main')

@section('content')

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form method="POST" action="/addproduct" id="product" name="product">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="id">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection