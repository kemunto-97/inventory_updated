@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Name</label>
                    <input class="form-control" type="text" value="{{$profile->name}}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="email" value="{{$profile->email}}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Created at</label>
                    <input class="form-control" type="date" value="{{$profile->created_at}}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  
                </div>
              </div>
              <hr class="horizontal dark">
            </div>
          </div>
        </div>
      </div>

@endsection