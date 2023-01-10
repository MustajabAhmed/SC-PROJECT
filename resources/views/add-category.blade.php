@extends('includes.dashboard')
      @section('section')
          @if (session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
          <div class="row">
              <div class="col-xl-2 col-md-6">
              </div>
              <div class="col-xl-8 col-md-6 mt-5 mb-5">
                  <div class="card bg-light text-white mb-4">
                      <div class="card-header text-dark">
                          <b> Add New Category</b>
                      </div>
                      <div class="card-body text-dark">
                          <form method="POST" action="{{url('store-category')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                  <input type="text" class="form-control" name="name">

                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                                  </div>

                                  <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                      </div>
                  </div>
              </div>
          @endsection
