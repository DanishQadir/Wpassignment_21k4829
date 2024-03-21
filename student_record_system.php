<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .student-record {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Records</h1>

    <?php
    $studentRecords = array(
        array('name' => 'Danish', 'age' => 20, 'grade' => 85),
        array('name' => 'Ali', 'age' => 22, 'grade' => 78),
        array('name' => 'Baber', 'age' => 21, 'grade' => 92),
        array('name' => 'Emran', 'age' => 19, 'grade' => 88),
        array('name' => 'Mubeen', 'age' => 23, 'grade' => 95)
    );

    function displayStudentRecords($studentRecords) {
        echo "<div class='student-record'>";
        echo "<h2>Student Records</h2>";
        foreach ($studentRecords as $record) {
            echo "<p><strong>Name:</strong> {$record['name']}, <strong>Age:</strong> {$record['age']}, <strong>Grade:</strong> {$record['grade']}</p>";
        }
        echo "</div>";
    }

    function displayAverageGrade($studentRecords) {
        $totalGrade = 0;
        foreach ($studentRecords as $record) {
            $totalGrade += $record['grade'];
        }
        $averageGrade = $totalGrade / count($studentRecords);
        echo "<p><strong>Average Grade:</strong> {$averageGrade}</p>";
    }

    function searchStudentByName($studentRecords, $name) {
        foreach ($studentRecords as $record) {
            if ($record['name'] === $name) {
                echo "<div class='student-record'>";
                echo "<h2>Student Found</h2>";
                echo "<p><strong>Name:</strong> {$record['name']}, <strong>Age:</strong> {$record['age']}, <strong>Grade:</strong> {$record['grade']}</p>";
                echo "</div>";
                return;
            }
        }
        echo "<p>Student with name '{$name}' not found.</p>";
    }

    displayStudentRecords($studentRecords);
    displayAverageGrade($studentRecords);
    searchStudentByName($studentRecords, 'Ali');

    ?>
</div>

</body>
</html>
