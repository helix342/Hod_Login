<?php
include("db.php");

if (isset($_POST['update_status'])) {
    try {
        $id = mysqli_real_escape_string($conn, $_POST['update_id']);
        
        $query = "UPDATE complaints_detail SET status = '4' WHERE id='$id'";

        if (mysqli_query($conn, $query)) {
            $res = [
                'status' => 200,
                'message' => 'Details Updated Successfully'
            ];
            echo json_encode($res);
        } else {
            throw new Exception('Query Failed: ' . mysqli_error($conn));
        }
    } catch (Exception $e) {
        $res = [
            'status' => 500,
            'message' => 'Error: ' . $e->getMessage()
        ];
        echo json_encode($res);
    }
}