<div class="container">
    <?php if($this->session->flashdata('status') !== NULL) : ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $this->session->flashdata('status');
                $this->session->set_flashdata('status', NULL);
            ?>
        </div>
    <?php endif; ?>
    
    <div class="row">
        <div class="col">
            <div class="card text-center">
                
                <div class="card-header">
                    Your Tindahan
                </div>
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Visit this Tindahan</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo site_url('your-tindahan/add-tindahan');?>" class="btn btn-primary float-end">Add Tindahan</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

