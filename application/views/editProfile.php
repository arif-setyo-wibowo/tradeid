<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary">
      <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
        <div class="row">
          
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col">
            <!-- /.tab-content -->
                <div class="card shadow-lg p-3">
                <ul class="nav nav-tabs nav-tabs-basic">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Edit Profile</a> </li>
                </ul>
                <!-- /.nav-tabs -->
                <form class="text-start mb-3" action="">
                <div class="tab-content mt-0 mt-md-5">
                    <div class="tab-pane fade show active" id="tab3-1">
                    <div class="p p-md-3 p-lg-3">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Email" id="loginEmail">
                            <label for="loginEmail">Full Name</label>
                        </div>
                        <div class="form-floating mb-4">
                                <textarea id="textareaExample" class="form-control" placeholder="Address" style="height: 150px" ></textarea>
                                <label for="textareaExample">Address</label>
                        </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName">
                                <label for="loginName">Phone</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName">
                                <label for="loginName">Country</label>
                            </div>
                    </div>
                    <!--/div -->
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill btn-login w-20 mb-2 ml-12">Submit</button>
                    <!--/.tab-pane -->
                    </div>
                </div>
                <!-- /.card -->
            
            <!-- /.form -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
      
      <!-- /.container -->
</section>
<?php $this->load->view($footer); ?>
    