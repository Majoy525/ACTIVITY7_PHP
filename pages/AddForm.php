<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Form Page</title>
    <?php include('../layout/style.php'); ?>
    <style>
        /* Background color for the body */
        body {
            background: #ffffff; /* White background */
            color: #333333; /* Dark text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Centering and styling form container */
        .form-container {
            max-width: 400px; /* Reduce the width of the container */
            margin: 40px auto; /* Adjust margin to make it closer to the top */
            padding: 20px; /* Reduce padding for a more compact form */
            background-color: #ffffff; /* White background for the form */
            border-radius: 8px; /* Slightly smaller radius for a tighter look */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            color: #333333; /* Dark text inside the form */
        }

        .form-container h2 {
            margin-bottom: 12px;
            font-size: 18px; /* Smaller font size for the heading */
            color: #333333; /* Dark text for heading */
            border-bottom: 1px solid #dddddd; /* Light grey for the border */
            padding-bottom: 6px;
            text-align: center; /* Centered title */
        }

        /* Styling form elements */
        .form-container label {
            display: block;
            font-size: 13px; /* Slightly smaller font size */
            margin-top: 10px;
            color: #666666; /* Medium grey for labels */
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 8px; /* Reduced padding for input fields */
            margin-top: 6px;
            font-size: 13px; /* Smaller font size */
            border: 1px solid #cccccc;
            border-radius: 4px;
            background-color: #f5f5f5; /* Light grey background for inputs */
            color: #333333; /* Dark text inside input fields */
        }

        /* Styling buttons */
        .form-container button[type="submit"],
        .form-container button[type="reset"] {
            width: 48%;
            padding: 10px; /* Smaller padding */
            margin-top: 12px;
            font-size: 13px; /* Smaller font size */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button[type="submit"] {
            background-color: #4CAF50; /* Green for submit */
            color: #ffffff;
        }

        .form-container button[type="reset"] {
            background-color: #d9534f; /* Red for reset */
            color: #ffffff;
        }

        /* Button hover effects */
        .form-container button[type="submit"]:hover {
            background-color: #000000; /* Black hover for submit button */
        }

        .form-container button[type="reset"]:hover {
            background-color: #000000; /* Black hover for reset button */
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="form-container">
                        <h2>Add Form</h2>
                        <form action="showDetails.php" method="POST">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" required>
                            
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" placeholder="Enter age" required>
                            
                            <label for="">Gender:</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value=""disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        </select>
                            <label for="course">Course:</label>
                            <select class="form-control" name="course" id="course">
                            <option value=""disabled selected>Select Course</option>
                                <option value="Bachelor Of Science in Information System">Bachelor Of Science in Information System</option>
                                <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
                            </select>
                            
                            <label for="campus">Campus:</label>
                            <select class="form-control" name="campus" id="campus">
                            <option value=""disabled selected>Select campus</option>
                                <option value="Sta.Cruz Campus">Sta.Cruz Campus</option>
                                <option value="Boac Campus">Boac Campus</option>
                                <option value="Torrijos Campus">Torrijos Campus</option>
                                <option value="Gasan Campus">Gasan Campus</option>
                            </select>
                            
                            <label for="college">College:</label>
                            <select class="form-control" name="college" id="college"> required>
                            <option value=""disabled selected>Select college</option>
                                <option value="College of Information and Computing Sciences">College of Information and Computing Sciences</option>
                                <option value="College of Engineering">College of Engineering</option>
                                <option value="College Business and Accountancy">College Business and Accountancy</option>
                                <option value="College of Governance">College of Governance</option>
                            </select>

                            <button type="submit" name="submit">Submit</button>
                            <button type="reset">Clear</button>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
