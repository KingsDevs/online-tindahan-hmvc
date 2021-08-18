<div class="container">
   
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">
                        <?php echo $data->title; ?>
                    </h3>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <img src="<?php echo base_url('/assets/uploads/tindahan-images/'.$data->image_name); ?>" alt="" class="card-img-top w-25 p-3">
                        
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editImage">
                            Edit
                        </button>
                    </div>    
                </div>
                         
            </div>             
        </div>
    </div>

</div>
<div class="modal fade" id="editImage" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>