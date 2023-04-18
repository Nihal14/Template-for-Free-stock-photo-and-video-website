<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "conn.php";

    // Retrieve the values from the form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $color = $_POST['color'];

    // Get the details of the uploaded file
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
            header("Location: indexuser.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO images(image_url ,title, description, type) 
                        VALUES('$new_img_name','$title', '$description', '$color' )";
                
                if (mysqli_query($conn, $sql)) {
    echo("<script>alert('Image Uploaded !!');
          window.location.href = 'indexuser.php';</script>");
}
            } else {
                $em = "You can't upload files of this type";
                header("Location: indexuser.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: indexuser.php?error=$em");
    }

} else {
    header("Location: indexuser.php");
}