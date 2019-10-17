@extends('layouts.app')

@section('content')
	<div class="col-lg-12" style="margin-top: 10%;">
		<div class="row">
			
		</div>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<!--h5 class="card-header">Register New User <i class="fas fa-user-plus"></i></h5-->
					<div class="row">
						<div class="col-lg-4" style="border-right: 1px solid #e9ecef;">
							<label style="color: #827591;font-size: 11px;">Mint is the free money management and financial tracker app that helps you get ahead and stay ahead. We bring together your bank accounts, credit cards, bills, and investments in one place. See what you’re spending and where you can save money, so you can live the life you want.</label>
						</div>					
						<div class="col-lg-8">
							<div class="card-body"> 
								<form class="" method="post" id="loginForm" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group">	
										<label class="sr-only" for="name">Username</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="background-color: unset;"><i class="fas fa-user"></i></div>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
										</div>
									</div>
									<div class="form-group">	
										<label class="sr-only" for="name">Password</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="background-color: unset;"><i class="fas fa-key"></i></div>
											</div>
											<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
										</div>
									</div>									
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" name="loginBtn" id="loginBtn" value="login">LOGIN <i class="fas fa-paper-plane"></i></button>
									</div>
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									<label style="color: gray; font-size: 10px; width: 100%;text-align: center;">Copyright @ 2019 One Person Workshop.</label>
								</form>
							</div>	
						</div>
					</div>		
				</div>	
			</div>
			<div class="col-lg-4"></div>
		</div>	
	</div>	
	<script>
	$(document).ready(function(){
		$('#loginForm').on('submit', function(event){
			event.preventDefault();
			if($('#loginBtn').val() == 'login'){			
				$.ajax({
					type:"POST",
					url:"login",
					dataType:"json",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					},
					data:{
						name: $('#name').val(),
						password: $('#password').val()
					},
					success:function(data){
						if(data.status == 'error'){
							//<?php $errors ?> = data.message
						}else{
							window.location.href = data.url;
						}
					}
				});
			}
		});
	});
	</script>
@endsection

@section('sidebar')
	<p>sidebar</p>
@endsection