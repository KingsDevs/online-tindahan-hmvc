<div class="container">
    <?php if($this->session->flashdata('status') !== NULL) : ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $this->session->flashdata('status');
                $this->session->set_flashdata('status', NULL);
            ?>
        </div>
    <?php endif; ?>

    <br>

    <div class="row">
        <div class="col">
        <a href="<?php echo site_url('your-tindahan/add-tindahan');?>" class="btn btn-primary float-end">Add Tindahan</a>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="card text-center">
            
            <div class="card-header">
                Your Tindahan List
            </div>
            <div class="scroll-list">
                
                <div class="card mb-3 tindahan-list">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    
    
</div>

<?php echo $this->load->view('tindahan/style'); ?>
