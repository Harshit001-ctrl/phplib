<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}


function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Fetch a single row from the result set
function fetch($result)
{
    return mysqli_fetch_assoc($result);
}

// Fetch all rows from the result set
function fetchAll($result)
{
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Insert data into a table
function insert($table, $data)
{
    global $conn;
    $columns = implode(', ', array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function selectall($table)
{
    $sql = "select * from $table";
    $result = query($sql);
    return $rows = fetchAll($result);
}
function select_By_Id($table, $id, $name)
{
    $aql = "select * from $table where $id=$name";
    $result = query($aql);
    return $rows = fetch($result);
}

// Update data in a table
function update($table, $data, $condition)
{
    global $conn;
    $set = '';
    foreach ($data as $key => $value) {
        $set .= "$key = '$value', ";
    }
    $set = rtrim($set, ', ');
    $sql = "UPDATE $table SET $set WHERE $condition";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Delete data from a table
function deleteRecord($table, $condition)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE $condition";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Close the database connection
function close()
{
    global $conn;
    mysqli_close($conn);
}

function selectbygsn($query)
{
    $result = query($query);
    $gsn = -1;
    $gsnfromstudent = fetch($result)['serial'];
    if ($gsnfromstudent > 0) {
        $gsn = $gsnfromstudent + 1;
    } else {
        $gsn = 1;
    }
    return $gsn;
}

function imageupload($file, $uploadfile)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($file)) {
        if ($file["error"] == 0) {
            $imagefiletype = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
            if (getimagesize($file["tmp_name"]) !== false) {                
                $allowedformats = array("jpg", "jpeg", "png", "gif");
                if (in_array($imagefiletype, $allowedformats)) {
                    $uploadfile = $uploadfile . "." . $imagefiletype;
                    if (move_uploaded_file($file["tmp_name"], "saved photo/". $uploadfile)) {
                        echo "image upload successfully";
                        return $uploadfile;
                    } else {
                        echo "error";
                    }
                }
                echo "only jpg, jpeg, png, gif are allowed ";
            } else {
                echo "file is not a image";
            }
        } else {
            echo "error" . $file["error"];
        }
    }
}

function selectByCondition($table, $condition)
{
    global $conn;
    $sql = "select * from $table where $condition";
    $result = mysqli_query($conn, $sql);
    return $rows = fetchAll($result);
}