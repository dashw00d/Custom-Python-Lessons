<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <style>
        body
        {
            font-family: Roboto;
            padding-left:5px;
        }
    </style>
</head>
<body>
    <?php
$dir_open = opendir('.');

while(false !== ($filename = readdir($dir_open))){
    if($filename != "." && $filename != ".." && $filename != "index.php"){
        $link = "<a href='./$filename'> $filename </a><br />";
        echo $link;
    }
}

closedir($dir_open);
?>
</body>
</html>