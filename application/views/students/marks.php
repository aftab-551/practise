<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">MARKSHEET</p>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?> 
                <form id="register=form" class="mx-1 mx-md-4"  action="<?php echo base_url('student/marks');?>" method="post">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="subjectid" name="subjectid" class="form-control"  />
                      <label class="form-label" for="form3Example1c">Enter Subject ID</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  id="studentid" name="studentid" class="form-control"  />
                      <label class="form-label" for="form3Example3c">Enter Student Id</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="midTM" name="midTM" value="25" class="form-control"  />
                      <label class="form-label" for="form3Example4c">mid total marks</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="midOM" name="midOM" class="form-control" />
                      <label class="form-label" for="form3Example4cd">mid obtained marks</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="sessionalTM" name="sessionalTM" value="25" class="form-control" />
                      <label class="form-label" for="form3Example4cd">sessional total marks</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="sessionalOM" name="sessionalOM" class="form-control" />
                      <label class="form-label" for="form3Example4cd">sessional obtained marks</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="finalTM" name="finalTM" value="50" class="form-control" />
                      <label class="form-label" for="form3Example4cd">final total marks</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="finalOM" name="finalOM" class="form-control" />
                      <label class="form-label" for="form3Example4cd">final obtained marks</label>
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit " class="btn btn-primary btn-lg">submit</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>