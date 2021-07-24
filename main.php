<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>My PHP knowledge</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="center">
        <div class="header">
            <?php include 'inc/logo_inc.php' ?>
            <?php include 'inc/nav_menu_inc.php' ?>
        </div>

        <h1><?php echo $p?></h1>

        <div class="content">
            <div class="about_author">
                <div class="content_author_photo">
                    <?php print '<img src="img/photo.jpg" alt="photo of manul" title="You look gorgeous on this foto" />'?>
                </div>
                <div class="content_author_info">
                    <p><?php echo "My name is ", $name, " ", $surname, ", <br>"; echo "from ", $loc?></p>
                    <p><?php print "I am " . $age . " years old"?></p>
                    <div class="knowledge">
                        <?php echo "<p>We have learned to create variables</p>"?>
                        <?php echo "<p>We have learned to do a simple operations with the variables</p>"?>

                        <?php include 'inc/knowledge_test_inc.php'; ?>
                        <?php print "<p>PHP skill test results:</p>";
                            echo "<pre>";
                            echo "PHP include vars: <br>\$a = $a; <br>\$b = $b; <br>\$c = $c;";
                            echo '<br>';
                            $a = 10;
                            $b = 11;
                            $c = $a + $b;
                            $c -= 0.5 * 2;
                            echo "PHP inline vars reassigned:      \$a = $a; \$b = $b; \$c = \$a + \$b - ( 0.5 * 2 ) = $c;";
                            echo '<br>';
                            echo "PHP include vars not reassigned: \$d = ", $d;
                            echo "</pre>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="content_text">
                <?php include 'inc/content_text_inc.php'; ?>
            </div>
        </div>

        <?php include 'inc/footer_inc.php'; ?>
    </div>
</body>
</html>