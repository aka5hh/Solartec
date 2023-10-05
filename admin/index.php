<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
?>
    <div class="row">
        <div class="col-md-12 welcome_part">
            <p><span>Welcome Mr.</span> <?php if(!empty($_SESSION['name'])){ echo $_SESSION['name'] ;}
            else{?> Abu Bakar Siddique</p> <?php } ?>
        </div>
    </div>
<?php
get_footer(); 
?>