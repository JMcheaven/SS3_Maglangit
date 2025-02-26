<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Income Tax Calculator</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #89CFF0; /* Baby Blue */
            text-align: center;
            margin: 50px;
        }

        /* Container Styling */
        .container {
            background: white;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        /* Input Styling */
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Updated Button Styling (Blue & Baby Blue Gradient) */
        button {
            background: linear-gradient(to right, #007bff, #89CFF0); /* Blue to Baby Blue */
            color: white;
            border: none;
            padding: 12px 18px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: transform 0.2s, box-shadow 0.2s, background 0.3s; /* Smooth Transition */
        }

        button:hover {
            background: linear-gradient(to right, #0056b3, #68b0e3); /* Darker Blue to Lighter Baby Blue */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Glow Effect */
        }

        button:active {
            transform: scale(0.95); /* Press Animation */
        }

        /* Result Styling */
        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            padding: 15px;
            background: #e9ecef;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>State Income Tax Calculator</h2>
        <label>Enter Hourly Rate: </label>
        <input type="number" id="hourlyRate" placeholder="Enter hourly rate" step="0.01">
        <button onclick="calculateTax()">Calculate</button>

        <div class="result" id="result"></div>
    </div>

    <script>
        function calculateTax() {
            // Get hourly rate input
            let hourlyRate = parseFloat(document.getElementById("hourlyRate").value);
            if (isNaN(hourlyRate) || hourlyRate <= 0) {
                document.getElementById("result").innerHTML = "Please enter a valid hourly rate.";
                return;
            }

            // Constants
            let workDays = 26;
            let workHoursPerDay = 8;
            
            // Calculate gross income
            let netIncome = hourlyRate * workDays * workHoursPerDay;
            let tax = 0;

            // Tax Calculation
            if (netIncome > 15000 && netIncome <= 30000) {
                tax = (netIncome - 15000) * 0.05;
            } else if (netIncome > 30000) {
                tax = (15000 * 0.05) + ((netIncome - 30000) * 0.10);
            }

            // Net income after tax
            let finalIncome = netIncome - tax;

            // Display results
            document.getElementById("result").innerHTML = `
                <p>Gross Income: <strong>$${netIncome.toFixed(2)}</strong></p>
                <p>Tax Amount: <strong>$${tax.toFixed(2)}</strong></p>
                <p>Net Income after Tax: <strong>$${finalIncome.toFixed(2)}</strong></p>
            `;
        }
    </script>

</body>
</html>
