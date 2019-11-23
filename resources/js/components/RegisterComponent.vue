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
                                    <div class="form-group" :class="{'has-error' : hasErrors.name}">
                                        <label class="sr-only" for="name">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: unset;"><i class="fas fa-user"></i></div>
                                            </div>
                                            <input type="text" class="form-control" v-model="registerDetails.name" id="name" name="name" placeholder="Username" required>
                                        </div>
                                        <span v-if="hasErrors.name" class="help-block"><strong>{{errorMessage.name}}</strong></span>
                                    </div>
                                    <div class="form-group" :class="{'has-error' : hasErrors.email}">
                                        <label class="sr-only" for="email">Email</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: unset;"><i class="fas fa-envelope"></i></div>
                                            </div>
                                            <input type="email" class="form-control" v-model="registerDetails.email" id="email" name="email" placeholder="Email" required>
                                        </div>
                                        <span v-if="hasErrors.email" class="help-block"><strong>{{errorMessage.email}}</strong></span>
                                    </div>
                                    <div class="form-group" :class="{'has-error' : hasErrors.password}">
                                        <label class="sr-only" for="password">Password</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: unset;"><i class="fas fa-key"></i></div>
                                            </div>
                                            <input type="password" class="form-control" v-model="registerDetails.password" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <span v-if="hasErrors.password" class="help-block"><strong>{{errorMessage.password}}</strong></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password_confirmation">Password Confirmation</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: unset;"><i class="fas fa-key"></i></div>
                                            </div>
                                            <input type="password" class="form-control" v-model="registerDetails.password_confirmation" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" @click.prevent="registerPost">SUBMIT <i class="fas fa-paper-plane"></i></button>
                                    </div>
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
                registerDetails:{
                    name:'',
                    password:''
                },
                hasErrors:{
                    name:false,
                    email:false,
                    password:false
                },
                errorMessage:{
                    name:null,
                    email:null,
                    password:null
                }
            }
        },
        methods:{
            registerPost(){
                let vm = this;
                axios.post('/register', vm.registerDetails)
                    .then(function (response){
                        if(response.data.status == 'error'){
                            vm.hasErrors.name = response.data.errors.name ? true : false
                            vm.errorMessage.name = vm.hasErrors.name ? response.data.errors.name : ""
                            vm.hasErrors.email = response.data.errors.email ? true : false
                            vm.errorMessage.email = vm.hasErrors.email ? response.data.errors.email : ""
                            vm.hasErrors.password = response.data.errors.password ? true : false
                            vm.errorMessage.password = vm.hasErrors.password ? response.data.errors.password : ""
                        }
                    })
                    .catch(function (error) {
                        var errors = error.response
                        console(errors)
                    });
            }
        },
        mounted() {
        }

    }
</script>

<style scoped>

</style>
