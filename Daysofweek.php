<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day buttons</title>
    <script>
        function displayDay(day) {
            document.getElementById("display").innerText = day;
        }
        </script>
</head>
<body>
    <button onclick="displayDay('Monday')">Monday</button>
    <button onclick="displayDay('Tuesday')">Tuesday</button>
    <button onclick="displayDay('Wednesday')">Wednesday</button>
    <button onclick="displayDay('Thursday')">Thursday</button>
    <button onclick="displayDay('Friday')">Friday</button>

    <h2 id="display"></h2>
</body>
</html>