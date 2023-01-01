@extends('admin.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Add Admin User </div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Add Admin User</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">

		</div>
	</div>
	<!--end breadcrumb-->
	<div class="container">
		<div class="main-body">
			<div class="row">

				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">

							<form id="myForm" method="post" action="{{ route('admin.user.store') }}">
								@csrf

								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">User Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="username" class="form-control"
											placeholder="Add User Name" value="{{ old('username') }}"/>
											@error('username')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Full Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="name" class="form-control"
											placeholder="Add Full Name" value="{{ old('name') }}"/>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="email" name="email" class="form-control" placeholder="Add Email" value="{{ old('email') }}"/>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Phone </h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="phone" class="form-control"
											placeholder="Add Your Phone Number" value="{{ old('phone') }}"/>
									</div>
								</div>


								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Address</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="address" class="form-control"
											placeholder="Add Address" value="{{ old('address') }}"/>
									</div>
								</div>

								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">password</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="password" name="password" class="form-control"
											placeholder="Add password" value="{{ old('password') }}"/>
									</div>
								</div>


								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Assign Roles </h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<select name="roles" class="form-select mb-3"
											aria-label="Default select example">
											<option selected="">Open this select menu</option>
											@foreach($roles as $role)
											<option value="{{ $role->id }}">{{ $role->name }}</option>
											@endforeach
										</select>
									</div>
								</div>







								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
									</div>
								</div>
						</div>

						</form>



					</div>




				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
				username: {
                    required : true,
                }, 
				email: {
                    required : true,
                }, 
            },
            messages :{
                name: {
                    required : 'Please Enter Admin Name',
                },

				username: {
                    required : 'Please Enter Admin Name',
                },
				email: {
                    required : 'Please Enter Admin Email',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>




@endsection