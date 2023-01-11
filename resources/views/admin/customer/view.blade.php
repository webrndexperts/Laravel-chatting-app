@extends('admin.master')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Customer View Form</h3>
              </div>

              <form>
			   @csrf
                <div class="card-body">
				   <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name="first_name" class="form-control"  value="{{$show_value->first_name}}" readonly>
					
                  </div>
				  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{$show_value->last_name}}" readonly>
                  	
				  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email_address" class="form-control" value="{{$show_value->email_address}}" readonly>
					
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{$show_value->phone_number}}" readonly>
					
                  </div>
				 <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" value="{{$show_value->address}}" readonly>
				   
                  </div>
                </div>
     
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
  