<!DOCTYPE html>
<html>
<head>
    <?php include('../phpinclude/commonmeta.php'); ?>
    
    <?php
        // Render CSS du bundle Bootstrap
        foreach($bootstrap['css'] as $css) {
            echo '<link rel="stylesheet" href="' . $css . '">' . "\n";
        }
    ?>

    <title>Teamup</title>
</head>
<body>
    <?php include('../phpinclude/navbar.php'); ?>

    <div class="container mt-4">
        <?php include('../index_partial.php'); ?>
    </div>

    <?php
        foreach($bootstrap['scripts'] as $script) {
            echo '<script src="' . $script . '"></script>' . "\n";
        }
    ?>

</body>
</html>