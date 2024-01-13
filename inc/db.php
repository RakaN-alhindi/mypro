<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'winRakan');


if(! $conn){
    echo 'Error: ' . mysqli_connect_Error();
}