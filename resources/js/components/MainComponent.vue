<template>
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Start Bootstrap </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="col-lg-12">
                    <div class="row">
                        <button class="btn btn-light" id="menu-toggle" @click="menuToggle"><i class="fas fa-bars"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-0 form-group"></div>
                        <div class="col-lg-3 col-md-6 col-6 form-group"> <!-- Date input -->
                            <label class="control-label" for="date">开始日期</label>
                            <input class="form-control" id="date_from" name="date" placeholder="MM/DD/YYYY" type="text"/>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 form-group"> <!-- Date input -->
                            <label class="control-label" for="date">结束日期</label>
                            <input class="form-control" id="date_to" name="date" placeholder="MM/DD/YYYY" type="text"/>
                        </div>
                        <div class="col-lg-3 col-0 form-group"></div>
                    </div>
                </div>
                <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                </div-->
            </nav>

            <div class="container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" style="width: 50%;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">收入</a>
                    </li>
                    <li class="nav-item" style="width: 50%;">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">费用</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="card shadow p-3 mb-5 bg-white rounded">
                                        <div class="row"><label class="col-lg-12">2018-09-18</label></div>
                                        <div class="row">
                                            <label class="col-lg-4 col-4">薪水</label>
                                            <label class="col-lg-4 col-4" style="font-size: 12px; color: gray;">九月</label>
                                            <label class="col-lg-4 col-4" style="text-align: right;">RM3750.00</label>
                                        </div>
                                        <div class="row"><label class="col-lg-12" style="font-size: 12px; color: gray;">这是Description</label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                        <a href="#" class="float">
                            <i class="fa fa-plus my-float"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</template>
<script>
    export default {
        data(){
            return{
            }
        },
        methods:{
            menuToggle(){
                $("#wrapper").toggleClass("toggled");
            }
        },
        mounted() {
            let navbar = document.getElementById("myTab");
            let sticky = navbar.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }

            window.onscroll = function() {myFunction()};
        }
    }
    /*$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);

        function getIncomes(){
            $.ajax({
                type:"GET",
                url:"incomes",
                dataType:"json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    console.log(data.incomes)
                }
            });
        }

        getIncomes()
    })

    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("myTab");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }*/
</script>
