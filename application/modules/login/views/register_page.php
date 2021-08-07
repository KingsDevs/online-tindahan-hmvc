<div class="container-fluid">
    <div class="row">
        
        <?php echo $this->load->view('login/background') ?>

        <div class="col-md-4 form-login">
            <h5 class="login-text">Register</h5>

            <br>

            <?php echo $this->load->view('login/logo') ?>
            <div class="mb-3">
                <form action="<?php echo base_url('register')?>" method="POST">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">

                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">

                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username">

                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password">
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    
                </form>
            </div>

        <p class="login-text">Already have an account <a href="<?php echo base_url('login')?>">login here</a></p>
    </div>
</div>

<?php echo $this->load->view('login/style')?>