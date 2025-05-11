<?php
function selectalldata($table) {
    $conn = getConnection();
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function selectdatabyid($table, $id, $struktur) {
    $conn = getConnection();
    $query = "SELECT * FROM $table WHERE $struktur = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_array();
}

function insert($data, $table) {
    $conn = getConnection();
    $columns = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    return mysqli_query($conn, $query);
}

function update($data, $table, $where, $struktur) {
    $conn = getConnection();
    $set = [];
    foreach ($data as $column => $value) {
        $set[] = "$column = '$value'";
    }
    $setStr = implode(", ", $set);
    $query = "UPDATE $table SET $setStr WHERE $struktur = '$where'";
    return mysqli_query($conn, $query);
}

function deletedata($table, $where, $struktur) {
    $conn = getConnection();
    $query = "DELETE FROM $table WHERE $struktur = '$where'";
    return mysqli_query($conn, $query);
}
?>
