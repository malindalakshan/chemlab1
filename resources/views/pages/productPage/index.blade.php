@extends('layouts.app')

@section('content')


<form class="pform">
<div class="col-sm-12" >
  <div class="card">
      
      <div class="card-body">
          <h5>Manage Products</h5>
          <hr>
          <div class="row">
              <div class="col-md-6">
                  <form>
                      <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" class="form-control" placeholder="Product Name">
                      </div>

                      <div class="form-group">
                        <label>Unit Name</label>
                        <input type="text" class="form-control" placeholder="Unit Name">
                    </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                    </div>

                      
                      <button type="submit" class="btn  btn-primary">Add Product</button>
                  </form>
              </div>
              
              </div>
          </div>
          
              


    
@endsection
