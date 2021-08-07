
<?php if($this->session->flashdata('status') !== NULL) : ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $this->session->flashdata('status');
            $this->session->set_flashdata('status', NULL);
        ?>
    </div>
<?php endif; ?>

<h1>Homepage</h1>
