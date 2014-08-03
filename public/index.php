<!DOCTYPE html>
<html>
<head>
    <title>Design Patterns - PHP</title>
    <meta content="text/html" charset="UTF-8"/>
    <style>
        a {
            color: #CCC;
            text-decoration: none;
        }

        h1 {
            font-size: 45px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            font-size: 25px;
        }

        body {
            font-family: monospace;
            font-size: 15px;
            padding: 20px 20px 20px 20px;
            background: rgba(36, 37, 35, 0.97);
            color: #FFF;
        }

        .coll1 {
            float: left;
            margin-right: 5%;
            width: 20%;
        }

        .coll1 ul {
            padding: 15px;
            background: #000;
            list-style: none;
        }

        .coll1 ul li {
            list-style: none;
        }

        .coll2 {
            float: left; width: 75%;
        }

        .sample
        {
            border: 1px solid #CCC;
            background: #EAEAEA;
            padding: 20px;
            background: #000;
            font-size: 40px;
        }
    </style>
</head>
<body>
<?php
function handleDir($path)
{
    $handle = opendir($path);

    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, ["..", '.', 'cgi-bin', '.DS_Store', 'README.md'])) {
            yield $file;
        }
    }

    closedir($handle);
}

$dir = realpath(__DIR__ . '/../src/GSoares/DesignPatterns');
?>
<h1>PHP - Design Patters</h1>

<div class="coll1">
    <h2>Menu</h2>
    <?php
    foreach (handleDir($dir) as $inDir) {
        echo "<li>$inDir</li>";
        echo "<ul>";

        foreach (handleDir($dir . '/' . $inDir) as $inSubDir) {
            echo "<li><a href=\"?pattern=$inSubDir&group=$inDir\">$inSubDir</a></li>";
        }

        echo "</ul>";
    }
    ?>
</div>
<div class="coll2">
    <h2>Sample</h2>
    <div class="sample">
        <?php
        if (isset($_GET['pattern']) && isset($_GET['group'])) {
            $function = 'GSoares\DesignPatterns\\' . $_GET['group'] . '\\' . $_GET['pattern'] . '\run' . $_GET['pattern'];

            if (file_exists($sampleFile = $dir . '/' . $_GET['group'] . '/' . $_GET['pattern'] . '/Sample.php')) {
                include $sampleFile;
            }

            if (function_exists($function)) {
                $function();
            } else {
                echo 'Exemplo não implementado ainda... :( <br/><br/>';
                echo 'Implemente a função <em>"' . $function . '()"</em> em:<br/><br/><em>"' . $sampleFile . '"</em>';
            }
        }
        ?>
    </div>
</div>
</body>
</html>