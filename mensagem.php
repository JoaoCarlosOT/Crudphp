<?php
    session_start();
    if(isset($_SESSION['mensagem'])):
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 <p>
    <div class="alert alert-light" role="alert">
        <?php echo $_SESSION['mensagem']?>
    </div>
 </p>

<?php
    endif;
    session_unset();

?>