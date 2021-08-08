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
                            <input type="text" class="form-control" placeholder="Title here" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>