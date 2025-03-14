<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Squares and Cubes</title>
    <style>
        /* Lover-Inspired Gradient Background */
        body {
            background: linear-gradient(to bottom right, #ff9a9e, #fad0c4, #a18cd1, #fbc2eb);
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Container with Soft Glow */
        .container {
            background: rgba(255, 255, 255, 0.2);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.3);
            width: 50%;
            backdrop-filter: blur(10px);
        }

        /* Input Field with Pastel Style */
        input {
            padding: 12px;
            font-size: 16px;
            border: 2px solid white;
            border-radius: 8px;
            text-align: center;
            width: 50%;
            background: rgba(255, 255, 255, 0.3);
            color: white;
            outline: none;
        }

        /* Glowing Button */
        .button {
            background: #ff758c;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.4s ease-in-out;
            font-weight: bold;
        }

        /* Hover Effect - Dreamy Glow */
        .button:hover {
            background: #ff9a9e;
            transform: scale(1.1);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.7);
        }

        /* Click Animation */
        .button:active {
            transform: scale(0.9);
        }

        /* Result Box with a Soft Glow */
        .result {
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            font-size: 20px;
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Enter an Upper Limit (N):</h2>
        <form method="post">
            <input type="number" name="upper_limit" min="1" required>
            <br><br>
            <button type="submit" class="button">✨ Calculate ✨</button>
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["upper_limit"]);
            $sum_squares = 0;
            $sum_cubes = 0;

            $i = 1;
            while ($i <= $n) {
                $sum_squares += $i * $i;  // Square of i
                $sum_cubes += $i * $i * $i;  // Cube of i
                $i++;
            }

            echo "<div class='result'>";
            echo "<p>The sum of Squares from 1 to $n is <strong>$sum_squares</strong> ✨.</p>";
            echo "<p>The sum of Cubes from 1 to $n is <strong>$sum_cubes</strong> 💖.</p>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
