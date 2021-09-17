<?php
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
 
    
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
        $dbLink = new mysqli('127.0.0.1', 'remoteuser', '4ndr0m3d@', 'Remote-Printing');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Fetch the file information
        $query = "delete from file where id = '$id'";
        $result = $dbLink->query($query);
 
        
            if($result)
{
    mysqli_close($dbLink); // Close connection
    header("location:list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record, please contact Adam"; // display error message if not delete
}
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>