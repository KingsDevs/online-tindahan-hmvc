<div class="container-fluid">
    <div class="row">
        
        <?php echo $this->load->view('login/background') ?>

        <div class="col-md-4 form-login">
            <?php if($this->session->flashdata('status_reg') !== NULL) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('status_reg');
                        $this->session->set_flashdata('status_reg', NULL);
                    ?>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('status_login') !== NULL) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('status_login');
                        $this->session->set_flashdata('status_login', NULL);
                    ?>
                </div>
            <?php endif; ?>

            <h4 class="login-text">Login</h4>

            <br>

            <img class="logo" src="<?php echo base_url('/assets/images/OnlineTindahan.png') ?>" alt="...">
            <div class="mb-3">
                <form action="" method="POST">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username">
                    <small class="input-error"><?php echo form_error('username'); ?></small>

                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    <small class="input-error"><?php echo form_error('password'); ?></small>

                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                    
                </form>
            </div>

            <p class="login-text">You don't have an account <a href="<?php echo site_url('register')?>">register here</a></p>
        </div>
    </div>
</div>

<?php echo $this->load->view('login/style')?>

