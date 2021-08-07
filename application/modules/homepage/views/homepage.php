<h1>Homepage</h1>

<?php
    print_r($this->session->userdata('login_data'));
    echo $this->session->userdata('is_login');
?>