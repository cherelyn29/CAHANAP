<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById("num1").value);
            const num2 = parseFloat(document.getElementById("num2").value);
            const sum = num1 + num2;
            const difference = num1 - num2;
            const product = num1 * num2;
            const quotient = num2 !== 0 ? (num1 / num2) : "Undefined (cannot divide by zero)";

            document.getElementById("result").innerHTML = `
                Sum: ${sum}<br>
                Difference: ${difference}<br>
                Product: ${product}<br>
                Quotient: ${quotient}
            `;
        }
    </script>
</head>
<body>
    <h2>Calculator</h2>
    <input type="number" id="num1" placeholder="Enter first number">
    <input type="number" id="num2" placeholder="Enter second number">
    <button onclick="calculate()">Submit</button>

    <div id="result"></div>
</body>
</html>
