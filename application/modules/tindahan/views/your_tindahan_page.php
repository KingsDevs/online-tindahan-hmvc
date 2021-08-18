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
        <div class="card text-center">
            
            <div class="card-header">
                Your Tindahan List
                <a href="<?php echo site_url('your-tindahan/add-tindahan');?>" class="btn btn-primary float-end">Add Tindahan</a>
            </div>
            <div class="scroll-list">
                <?php if($this->session->has_userdata('tindahan_data')) : ?>
                            <?php 
                                $tindahan_data = $this->session->userdata('tindahan_data');
                                foreach($tindahan_data as $td) :
                            ?>
                    <div class="card mb-3 tindahan-list">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="<?php echo base_url('/assets/uploads/tindahan-images/'.$td->image_name); ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $td->title; ?></h5>
                                <p class="card-text"><?php echo $td->description; ?></p>
                                
                                <a href="<?php echo site_url('your-tindahan/edit/'.$td->tindahan_id) ?>" class="btn btn-primary visit-btn">Visit this Tindahan</a>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ; ?>
            <?php endif ; ?>
            </div>
        </div>

    </div>
    <br>
    
    
</div>

<?php echo $this->load->view('tindahan/style'); ?>
