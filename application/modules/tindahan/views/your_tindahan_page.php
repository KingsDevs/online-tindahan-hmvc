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
                <?php if($this->session->has_userdata('tindahan_data')) : ?>
                    <?php 
                        $tindahan_data = $this->session->userdata('tindahan_data');
                        foreach($tindahan_data as $td) :
                     ?>
                        <img src="<?php echo base_url('/assets/uploads/tindahan-images/'.$td->image_name); ?>" class="card-img-top w-25 p-3 td-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $td->title; ?></h5>
                            <p class="card-text"><?php echo $td->description; ?></p>
                            <a href="#" class="btn btn-primary">Visit this Tindahan</a>
                            <hr>
                        </div>
                    <?php endforeach ; ?>
                <?php endif ; ?>
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

<?php echo $this->load->view('tindahan/style'); ?>
