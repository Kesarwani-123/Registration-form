<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allura&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #ffffff;

        }
    </style>
</head>

<body>
    <header>
       <a href="index.html"> <img src="ks.jpg" alt="Logo"></a>
        <div class="social-icons">
            
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/s.surajkesharii?igsh=eGVrZDBuMm9lemw1" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> 7355264037</a>
        </div>
    </header>
     <h3 class="form-title">Registration Form</h3>
    <div class="container mt-5">

        <hr>

        <form id="registrationForm" method="post" enctype="multipart/form-data" action="send_form.php">
            <div class="form-row mb-3">
                <div class="col-md-6 d-md-flex flex-column align-items-end order-md-2">
                    <div id="image-preview-box" class="border mb-3" style="width: 50%;">
                        <img id="image-preview" alt="" style="width: 100%; height: 100%;">
                    </div>
                    <div class="custom-file" style="width: 50%;">
                        <label class="custom-file-label" for="image">Choose File</label>
                        <input type="file" class="custom-file-input" id="image" name="image1" accept="image/*" onchange="previewImage()" required>
                    </div>
                </div>
                <div class="col-md-6 align-self-end order-md-1">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" readonly>
                    <label for="studentID" class="form-label mt-2">Registration No.</label>
                    <input type="text" class="form-control" id="studentID" name="studentID" readonly>
                </div>
            </div>
        
            <div class="form-group">
                <label for="fullName">Participant Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
            </div>
        
           
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter Instagram handle"required>
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob"required>
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender"required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="age">Age</label>
                    <input type="number" class="formAge-control form-control" id="age" name="age" placeholder="Enter your age"required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="height">Height (cm)</label>
                    <input type="text" class="form-control" id="height" name="height" placeholder="Enter height"required>
                </div>
                <div class="form-group col-md-6">
                    <label for="weight">Weight (kg)</label>
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight"required>
                </div>
              
            </div>
        
        
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification"required>
            </div>
            
        
            <div class="form-group">
                <label for="previousPerformanceSelection">Do you have previous performance?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="previousPerformanceYes" name="previousPerformanceSelection" value="yes" onclick="showPreviousPerformanceTextArea()">
                    <label class="form-check-label" for="previousPerformanceYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="previousPerformanceNo" name="previousPerformanceSelection" value="no" onclick="hidePreviousPerformanceTextArea()">
                    <label class="form-check-label" for="previousPerformanceNo">No</label>
                </div>
            </div>
            <div class="form-group" id="previousPerformanceTextArea" style="display: none;">
                <label for="previousPerformance">Details of Previous Performance</label>
                <textarea class="form-control" id="previousPerformance" rows="3" name="previousPerformance" placeholder="Enter details"></textarea>
            </div>
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Residence Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter your residence address" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressP">Permanent Address</label>
                        <textarea class="form-control" id="addressP" rows="3" name="addressP" placeholder="Enter your permanent address"></textarea>
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <label for="category">Category</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="dancing" name="category[]" value="dancing">
                    <label class="form-check-label" for="dancing">Dancing</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="modeling" name="category[]" value="modeling">
                    <label class="form-check-label" for="modeling">Modeling</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="singing" name="category[]" value="singing">
                    <label class="form-check-label" for="singing">Singing</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="rapping" name="category[]" value="rapping">
                    <label class="form-check-label" for="rapping">Rapping</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="acting" name="category[]" value="acting">
                    <label class="form-check-label" for="acting">Acting</label>
                </div>
            </div>
        
           
        
           
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        window.onload = displayStudentInfo;


        function displayStudentInfo() {
            // Generate a random student ID (prefixed with "SS")
            const randomStudentID = "KS" + Math.floor(Math.random() * 1000000);

            // Display the student ID and current date in Indian time
            document.getElementById('studentID').value = randomStudentID;

            const currentDate = new Date();
            // Set the time zone offset for Indian Standard Time (IST)
            currentDate.setMinutes(currentDate.getMinutes() + 330);
            
            // Format the date manually as "yyyy-MM-dd"
            const year = currentDate.getFullYear();
            const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
            const day = currentDate.getDate().toString().padStart(2, '0');
            const formattedDate = `${year}-${month}-${day}`;

            document.getElementById('date').value = formattedDate;
        }






        function previewImage() {
            const input = document.getElementById('image');
            const previewBox = document.getElementById('image-preview-box');
            const previewImage = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewBox.style.background = 'none'; // Remove the border and background
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                // If no file selected, show an empty box with border
                previewImage.src = '';
                previewBox.style.background = 'linear-gradient(90deg, #ccc 50%, transparent 50%) 0 0/15px 15px'; // Add the border and background
            }
        }

    //   previous image
    function showPreviousPerformanceTextArea() {
        document.getElementById("previousPerformanceTextArea").style.display = "block";
    }

    function hidePreviousPerformanceTextArea() {
        document.getElementById("previousPerformanceTextArea").style.display = "none";
    }


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add Font Awesome for social media icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    
</body>

</html>