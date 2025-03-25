<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background: #000;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            background: #111;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            transition: transform 0.3s;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #fff;
            text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
        }

        input {
            width: 60px;
            padding: 10px;
            border: 1px solid #fff;
            background: transparent;
            color: #fff;
            margin: 5px;
            text-align: center;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            background: rgba(255, 255, 255, 0.2);
        }

        button {
            margin-top: 10px;
            padding: 12px 25px;
            font-size: 1em;
            border: 1px solid #fff;
            background: transparent;
            color: white;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
        }

        button:hover {
            background: #fff;
            color: #000;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.8);
            transform: scale(1.05);
        }

        .result {
            margin-top: 20px;
            font-size: 1.2em;
            text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
        }

        .neon-text {
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
            text-shadow: 0px 0px 5px #fff, 0px 0px 10px #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Grade Calculator</h2>
    <form method="post">
        <label>1st Quarter:</label> <input type="number" name="q1" required><br>
        <label>2nd Quarter:</label> <input type="number" name="q2" required><br>
        <label>3rd Quarter:</label> <input type="number" name="q3" required><br>
        <label>4th Quarter:</label> <input type="number" name="q4" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];

        $average = ($q1 + $q2 + $q3 + $q4) / 4;

        // Determine descriptor and remarks
        if ($average >= 90) {
            $descriptor = "Outstanding";
            $remarks = "Passed";
        } elseif ($average >= 85) {
            $descriptor = "Very Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 80) {
            $descriptor = "Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 75) {
            $descriptor = "Fairly Satisfactory";
            $remarks = "Passed";
        } else {
            $descriptor = "Did Not Meet Expectations";
            $remarks = "Failed";
        }

        echo "<div class='result'>";
        echo "<p class='neon-text'>Average Grade: " . number_format($average, 2) . "</p>";
        echo "<p>Description: <span class='neon-text'>$descriptor</span></p>";
        echo "<p>Remarks: <span class='neon-text'>$remarks</span></p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
