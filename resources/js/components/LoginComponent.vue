<template>
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
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="sr-only" for="name">Username</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="background-color: unset;"><i class="fas fa-user"></i></div>
											</div>
											<input type="text" class="form-control" v-model="loginDetails.name" id="name" name="name" placeholder="Username" required>
										</div>
									</div>
									<div class="form-group">
										<label class="sr-only" for="name">Password</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="background-color: unset;"><i class="fas fa-key"></i></div>
											</div>
											<input type="password" class="form-control" v-model="loginDetails.password" id="password" name="password" placeholder="Password" required>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" name="loginBtn" id="loginBtn" value="login" @click.prevent="loginPost">LOGIN <i class="fas fa-paper-plane"></i></button>
									</div>
									<div class="form-group" style="text-align: center;">
										<label style="color: gray; font-size: 13px;">New User? </label><a href="register"> Register Here</a>
									</div>
									<div id="errorMessage"></div>
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
</template>

<script>
    export default {

		data(){
            return{
				loginDetails:{
					name:'',
					password:''
				}
            }
		},
        methods:{
			loginPost(){
				let vm = this;
				axios.post('/login', vm.loginDetails)
				.then(function (response){
				   window.location.href = response.data.url;
				})
				.catch(function (error) {
					var errors = error.response
				});
			}
        },
        mounted() {
        }

    }
</script>
