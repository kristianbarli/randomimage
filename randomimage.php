<?php


$con = mysqli_connect("localhost", "random", "image", "randomimage");

if (!$con)
{
    echo "Error connecting.";
    exit();
}

mysqli_set_charset($con, "UTF8");

$query = "SELECT id FROM randimg";

$result = mysqli_query($con, $query);

if (!$result)
{
    echo "Query error.";
    exit();
}

while ($row = mysqli_fetch_array($result))
{
    $ids[] = $row["id"];
}

$randnum = rand(1, count($ids));

echo 'background:url("img' . $randnum . '.jpg") no-repeat center center fixed;background-size:cover';


?>