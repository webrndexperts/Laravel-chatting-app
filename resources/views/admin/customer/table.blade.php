 @extends('admin.master')
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>
                <a href="{{route('customerCreate')}}" class="btn btn-primary float-right">Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th colspan="3">Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
			   	  @foreach ($get_customer_list as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->first_name}}</td>
                    <td>{{$post->last_name}}</td>
                    <td>{{$post->email_address}}</td>
                    <td>{{$post->phone_number}}</td>
					<td>
                   <a href="/customerEdit/{{ $post->id}}" class="btn btn-secondary">Edit</a>
				   
                   <a href="/customerView/{{ $post->id}}" class="btn btn-primary">View</a>
				   
					<form class="delete-formID" method="POST" action="/customerDestroy/{{ $post->id}}">
					@csrf

					@method('DELETE')

					<button type="submit" class="btn btn-danger"> 
						<span>
							<i class="fas fa-skull-crossbones"></i> Delete 
						</span>
					</button>
					</form>				 
						
					</td>
                  </tr>
			       @endforeach 
                </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr. No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                   <th colspan="3">Action</th>
				  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
 @endsection