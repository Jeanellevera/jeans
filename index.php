<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Ubuntu Activity</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #004085;
        }
    </style>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <div>
        <h1>Personal Information Form</h1>
        <form action="submit.php" method="post">
            <div>
                <label for="firstname">Firstname:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div>
                <label for="middlename">Middlename:</label>
                <input type="text" id="middlename" name="middlename">
            </div>
            <div>
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="course">Course & Section:</label>
                <input type="text" id="course" name="course" required>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>