<?php
include("db.php");

if (isset($_POST['update_status'])) {
    try {
        $id = mysqli_real_escape_string($conn, $_POST['update_id']);
        
        $query = "UPDATE complaints_detail SET status = '4' WHERE id='$id'";
        
        if (mysqli_query($conn, $query))    {
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

if (isset($_POST['updated_status'])) {
    try {
        $id = mysqli_real_escape_string($conn, $_POST['updated_id']);
        
        $query = "UPDATE complaints_detail SET status = '4' WHERE status='2' ";

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

if (isset($_POST['textaria'])) {
    try {
        $id = mysqli_real_escape_string($conn, $_POST['reject_id']);
        $feedback = mysqli_real_escape_string($conn, $_POST['textaria']);

        $query = "UPDATE complaints_detail SET feedback = '$feedback', status = '5' WHERE id = '$id'";

        if (mysqli_query($conn, $query)) {
            $res = [
                'status' => 200,
                'message' => 'Details Updated Successfully'
            ];
            echo json_encode($res);
        } else {
            throw new Exception('Query Failed: ' . mysqli_error($conn));
            echo "print";
        }
    } catch (Exception $e) {
        $res = [
            'status' => 500,
            'message' => 'Error: ' . $e->getMessage()
        ];
        echo json_encode($res);
    }
}

if (isset($_POST['seedetails'])) {
    $student_id1 = mysqli_real_escape_string($conn, $_POST['user_id']);

    $query = "SELECT * FROM complaints_detail WHERE id='$student_id1' and status='2'";
    $query_run = mysqli_query($conn, $query);
    //data only for editing
    $User_data = mysqli_fetch_array($query_run);


    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'details Fetch Successfully by id',
            'data' => $User_data
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['seedetailscomp'])) {
    $student_id2 = mysqli_real_escape_string($conn, $_POST['user_idcomp']);
    
    $query = "SELECT * FROM complaints_detail WHERE id='$student_id2' and status='11'";
    $query_run = mysqli_query($conn, $query);
    //data only for editing
    $User_data = mysqli_fetch_array($query_run);


    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'details Fetch Successfully by id',
            'data' => $User_data
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['seedetailsrej'])) {
    $student_id3 = mysqli_real_escape_string($conn, $_POST['user_idrej1']);
    
    $query = "SELECT * FROM complaints_detail WHERE id='$student_id3' and status='5'";
    $query_run = mysqli_query($conn, $query);
    //data only for editing
    $User_data = mysqli_fetch_array($query_run);


    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'details Fetch Successfully by id',
            'data' => $User_data
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['seefeedback'])) {
    $student_id4 = mysqli_real_escape_string($conn, $_POST['user_idrej']);
    
    $query = "SELECT feedback FROM complaints_detail WHERE id='$student_id4'";
    $query_run = mysqli_query($conn, $query);
    //data only for editing
    $User_data = mysqli_fetch_array($query_run);


    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'details Fetch Successfully by id',
            'data' => $User_data
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}
// Handle get image request
// if (isset($_POST['get_image'])) {
//     $user_id = $_POST['user_id'];

//     $query = "SELECT images FROM complaints_detail WHERE id = ?";
//     if ($stmt = $conn->prepare($query)) {
//         $stmt->bind_param('i', $user_id);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows > 0) {
//             $row = $result->fetch_assoc();
//             $imageData = base64_encode($row['images']); // Encode image data to base64
//             $res = ['status' => 200, 'data' => ['image' => 'data:image/jpeg;base64,' . $imageData]];
//         } else {
//             $res = ['status' => 404, 'message' => 'No image found'];
//         }
//         $stmt->close();
//     } else {
//         $res = ['status' => 500, 'message' => 'Database error: ' . $conn->error];
//     }
//     echo json_encode($res);
//     exit();
// }

$conn->close();

?>
