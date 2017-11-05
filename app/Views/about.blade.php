<?php
require_once '../app/Views/partials/header.php';
?>

    <h1>About Page</h1>
    <hr>
    
    <div class="menu">
        <a href="<?php echo $GLOBALS['static'] ?>/home">Home</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/user/show">User</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/about" class="active">About</a> |
        <a href="https://github.com/egin10/devcat-framework">Github</a>
    </div>

    <p>
        This is a simple MVC using PHP. <br>
        <br>
        egin10
    </p>

<?php
    require_once '../app/Views/partials/footer.php';
?>