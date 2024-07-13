<?php

function cleanUp($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

function registerUser($fname, $lname, $email, $password){
    global $sqlConnect;

    // Clean up the input data
    $fname = cleanUp($fname);
    $lname = cleanUp($lname);
    $email = cleanUp($email);

    // Use password_hash instead of md5 for security
    $password = password_hash($password);
    $joined_date = date("Y-m-d H:i:s");
    $uHash = md5($email);

    // Prepare the SQL statement to prevent SQL injection
    $query_text = "INSERT INTO Users (fname, lname, email, pass, joined_date, uhash) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($sqlConnect, $query_text);
    if ($stmt === false) {
        echo "Failed to prepare the statement: " . mysqli_error($sqlConnect);
        return;
    }

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, 'ssssss', $fname, $lname, $email, $password, $joined_date, $uHash);

    // Execute the statement
    $query = mysqli_stmt_execute($stmt);

    if ($query) {
        echo "Done";
    } else {
        echo "Not Done: " . mysqli_stmt_error($stmt);
    }

    // Close the statement

    mysqli_stmt_close($stmt);
}

// login

function loginUser($email, $password){
    global $sqlConnect;
    $email = cleanUp($email);
    $password = md5($password);

    
    $fetched_data = array();
    $query_text = "SELECT * FROM Users WHERE 
    email = '$email' AND pass = '$password'
    ";
    $query = mysqli_query($sqlConnect,$query_text);
    
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $fetched_data = $row;
        }
    }

    return $fetched_data;

}

?>