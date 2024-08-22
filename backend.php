<?php
include("db.php");

//Add new User
if (isset($_POST['add_details'])) {
    try {
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $dname = mysqli_real_escape_string($conn, $_POST['degree']);
        $sname = mysqli_real_escape_string($conn, $_POST['spec']);
        $iname = mysqli_real_escape_string($conn, $_POST['instname']);
        $bname = mysqli_real_escape_string($conn, $_POST['uni']);
        $yop = mysqli_real_escape_string($conn, $_POST['yop']);
        $gpa = mysqli_real_escape_string($conn, $_POST['percentag']);

        $query = "INSERT INTO academic_details(Course, Degree, Spec, InstName, Uni, YoP, Percentag) VALUES ('$course','$dname','$sname','$iname', '$bname', '$yop', '$gpa')";

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

//delete User
if (isset($_POST['delete_user'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['edit_id']);
  
    $query = "DELETE FROM academic_details WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
  
    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Details Deleted Successfully'
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
  
  if (isset($_GET['get_details'])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
    
    $query = "SELECT * FROM academic_details WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_assoc($query_run);
        $res = [
            'status' => 200,
            'data' => $user
        ];
    } else {
        $res = [
            'status' => 500,
            'message' => 'User Not Found'
        ];
    }
    echo json_encode($res);
}

if (isset($_POST['update_details'])) {
    try {
        $id = mysqli_real_escape_string($conn, $_POST['edit_id']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $dname = mysqli_real_escape_string($conn, $_POST['degree']);
        $sname = mysqli_real_escape_string($conn, $_POST['spec']);
        $iname = mysqli_real_escape_string($conn, $_POST['instname']);
        $bname = mysqli_real_escape_string($conn, $_POST['uni']);
        $yop = mysqli_real_escape_string($conn, $_POST['yop']);
        $gpa = mysqli_real_escape_string($conn, $_POST['percentag']);

        $query = "UPDATE academic_details SET Course='$course', Degree='$dname', Spec='$sname', InstName='$iname', Uni='$bname', YoP='$yop', Percentag='$gpa' WHERE id='$id'";

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


$user_id = 1; // Replace with dynamic user ID based on session or query parameter

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch data
    $user = $result->fetch_assoc();
} else {
    $user = null;
}

$stmt->close();
$conn->close();
?>