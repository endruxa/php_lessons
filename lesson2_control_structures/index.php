<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello !!!</h1>
<?php
/*$a = "C";
$b = "X";
if ($a < $b)
    {
        echo $a . " " . "is smaller than" . " " . $b;
    }*/

/*$items = 11;
if ($items < 10) {
    echo "You get 10% discount";
} else {
    echo "You get 5% discount";
}*/

/*while ($i < 30) {
    echo $i += 1;
}*/

/*do {
    echo $x;
}
while($x++ < 10)*/

/*for ($x = 0; $x++ < 10;)
    echo $x;
*/

/*if ($a == 5):
    echo "a равно 5";
    echo "...";
elseif ($a == 6):
    echo "a равно 6";
    echo "!!!";
else:
    echo "a не равно ни 5 ни 6";
endif;*/

/*$foo = 'foo';
$bar = 'bar';

if (isset($bar)):
    if (isset($foo)): echo "Both are set.";
    elseif (isset($foo)):
        echo "Only 'foo' is set.";
    else:
        echo "Only 'bar' is set.";
    endif;
endif;*/

/*foreach ($_SERVER as $k => $value)
    echo "<b> $k </b> => <b> $value </b><br />";*/

/*if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry\n";
        }
    }
    closedir($handle);
}*/

function listDirs($where){
    echo "<table border=\"1\"><tr><td><b>Name</b></td><td><b>Type</b></td>";
    echo "<td><b>Invisible (Hidden)?</b></td></tr>";
    $itemHandler=opendir($where);
    $i=0;
    while(($item=readdir($itemHandler)) !== false){
        if(substr($item, 0, 1)!="."){
            if(is_dir($item)){
                echo "<tr><td>$item</td><td>Directory</td><td>No</td></tr>";
            }else{
                echo "<tr><td>$item</td><td>File</td><td>No</td></tr>";
            }
            $i++;
        }else{
            if(is_dir($item)){
                echo "<tr><td>$item</td><td>Directory</td><td>Yes</td></tr>";
            }else{
                echo "<tr><td>$item</td><td>File</td><td>Yes</td></tr>";
            }
            $i++;
        }
    }
    echo "</table>";
}
listDirs("/home/endru/PhpstormProjects/PhpLessons/")

?>

</body>
</html>
