<div class="container-fluid">
    <div class="row">
        
        <?php echo $this->load->view('login/background') ?>

        <div class="col-md-4 form-login">
            <h5 class="login-text">Login</h5>

            <br>

            <?php echo $this->load->view('login/logo') ?>
            <div class="mb-3">
                <form action="" method="POST">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username">

                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                    
                </form>
            </div>

            <p class="login-text">You don't have an account <a href="<?php echo base_url('register')?>">register here</a></p>
        </div>
    </div>
</div>

<?php echo $this->load->view('login/style')?>

