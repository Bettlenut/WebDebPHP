<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $courseName = $_POST["coursename"];
        $courseDesc = $_POST["coursedesc"];
        $courseCat = $_POST["coursecat"];

        $con = mysqli_connect("localhost", "batch1", "batch1", "db_tiongsan", "3307");
        $sql = "INSERT INTO `tbl_courses`(`course_name`, `course_description`, `category`) VALUES ('$courseName','$courseDesc', '$courseCat')";
        $result = $con  -> query($sql);

        if($result){
            echo "Course Created Successfully!";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="row">

        </header>
        <main class="row">
            <h1>Create Course</h1>
            <form action="" method="POST">
                <label for="coursename">Course Name: </label>
                <input type="text" name="coursename" class="form-control">

                <label for="coursedesc">Course Description: </label>
                <textarea name="coursedesc" id="coursedesc" class="form-control"></textarea>

                <label for="coursecat">Course Category: </label>
                <input type="text" name="coursecat" class="form-control">

                <input type="submit" value="Create Course" class="btn btn_primary mt-3">
            </form>
        </main>
        <footer class="row">
            
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>