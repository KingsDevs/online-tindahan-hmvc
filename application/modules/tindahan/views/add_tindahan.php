<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Add Tindahan
                    <a href="<?php echo site_url('your-tindahan'); ?>" class="btn btn-danger float-end">Cancel</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('your-tindahan/add-tindahan'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="Title here" name="title" value="<?php echo set_value('title'); ?>">
                            <small class="input-error"><?php echo form_error('title'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Write your description" name="description" rows="4"><?php echo set_value('description'); ?></textarea>
                            <small class="input-error"><?php echo form_error('description'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .input-error
    {
        color:red;
    }

</style>