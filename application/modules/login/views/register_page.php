<div class="container-fluid">
    <div class="row">
        
        <?php echo $this->load->view('login/background') ?>

        <div class="col-md-4 form-login">
            <?php if($this->session->flashdata('status_reg') !== NULL) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('status_reg');
                         $this->session->set_flashdata('status_reg', NULL);
                    ?>
                </div>
            <?php endif; ?>
            <h4 class="login-text">Register</h4>

            <br>

            <img class="logo" src="<?php echo base_url('/assets/images/OnlineTindahan.png'); ?>" alt="...">
            <div class="mb-3">
                <form action="<?php echo site_url('register');?>" method="POST">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" value="<?php echo set_value('firstname'); ?>" autocomplete="off">
                    <small class="input-error"><?php echo form_error('firstname'); ?></small>

                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>" autocomplete="off">
                    <small class="input-error"><?php echo form_error('lastname'); ?></small>

                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>" autocomplete="off">
                    <small class="input-error"><?php echo form_error('username'); ?></small>

                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <small class="input-error"><?php echo form_error('password'); ?></small>

                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password">
                    <small class="input-error"><?php echo form_error('c_password'); ?></small>

                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    
                </form>
            </div>

        <p class="login-text">Already have an account <a href="<?php echo site_url('login')?>">login here</a></p>
    </div>
</div>

<?php echo $this->load->view('login/style')?>