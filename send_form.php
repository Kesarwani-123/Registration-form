<?php
require 'smtp/PHPMailerAutoload.php';

// Fixed recipient email address
$receiver = "kajalkesharwani171@gmail.com";

// Function to send email using PHPMailer
function smtp_mailer($to, $subject, $msg, $image1Path) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "kajal.vairit@gmail.com";
    $mail->Password = "cftijwdeyewpelpq";
    $mail->SetFrom("kajal.vairit@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);

    // Embed images using base64 encoding
    $image1Content = file_get_contents($image1Path);
  
    $mail->AddEmbeddedImage("data:image/jpeg;base64," . base64_encode($image1Content), 'image1', 'image1.jpg');

    return $mail->Send() ? "Email sent successfully" : $mail->ErrorInfo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include your database connection file
    include('db_connection.php');

    // Retrieve all form data
    // Retrieve all form data
    $date = $_POST['date'];
    $studentID = $_POST['studentID'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $address = $_POST['address'];
    $addressP = $_POST['addressP'];
    $qualification = $_POST['qualification'];
    $category = implode(', ', $_POST['category']); // Convert array to comma-separated string
    $previousPerformanceSelection = isset($_POST['previousPerformanceSelection']) ? $_POST['previousPerformanceSelection'] : '';
    $previousPerformance = isset($_POST['previousPerformance']) ? $_POST['previousPerformance'] : '';


    // File upload paths
    $image1Path = "uploads/" . basename($_FILES["image1"]["name"]);
  
    // Move uploaded images to the server
    move_uploaded_file($_FILES["image1"]["tmp_name"], $image1Path);
    
    $baseImagePath = "https://thepurehing.com/Registration_modeling/";

        // HTML template for the email body
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                img {
                    width: 300px;
                    height: auto;
                    margin-top: 10px;
                }
            </style>
        </head>
        <body>
        <h3>Form Submission</h3>
        <p>Date: ' . $date . '</p>
        <p>Registration ID: ' . $studentID . '</p>
        <p>Participant Name: ' . $fullName . '</p>
        <p>Email: ' . $email . '</p>
        <p>Instagram: ' . $instagram . '</p>
        <p>Date of Birth: ' . $dob . '</p>
        <p>Gender: ' . $gender . '</p>
        <p>Age: ' . $age . '</p>
        <p>Height: ' . $height . '</p>
        <p>Weight: ' . $weight . '</p>
        <p>Residence Address: ' . $address . '</p>
        <p>Permanent Address: ' . $addressP . '</p>
        <p>Qualification: ' . $qualification . '</p>
        <p>Category: ' . $category . '</p>
        <p>Previous Performance Selection: ' . $previousPerformanceSelection . '</p>
        <p>Details of Previous Performance: ' . $previousPerformance . '</p>
        
        
            <p>Attachment 1: <img src="' . $baseImagePath . $image1Path . '" alt="Image 1"></p>
          </body>
        </html>';
        
        
        
$html1 = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Registering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Registering!</h1>
        <p>We appreciate you joining our community. Your registration was successful.</p>
        <p>If you have any questions or need further assistance, feel free to contact us.</p>
        <p>Best regards,<br>KS Production <br>kajal kesarwani</p>
    </div>
</body>
</html>
';

echo $html1;





    // Insert data into the database
    $sql = "INSERT INTO student_registration (date, studentID, fullName, email, instagram, dob, gender, age, height, weight, qualification, previousPerformance,address, addressP, image1, category) VALUES ('$date', '$studentID', '$fullName', '$email', '$instagram', '$dob', '$gender', '$age', '$height', '$weight', '$qualification', '$previousPerformance',  '$address', '$addressP',  '$image1Path', '" . implode(",", $_POST['category']) . "')";

    if ($conn->query($sql) === TRUE) {
        
        // foreach ($recipients as $recipient) {
            $result = smtp_mailer($receiver, "Participant Registration", $html, $image1Path);
            $result1 = smtp_mailer($email, "KS Production:Modeling Registration", $html1, $image1Path);

            // Output the result for each recipient
            // echo "Form submitted successfully. Email sent to $receiver: " . $result . "<br>";
            //  echo "Form submitted successfully. Email sent to $email: " . $result1 . "<br>";

        // }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // The script should only handle POST requests
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    exit;
}
?>
