<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #5bc0de;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        a:hover {
            background-color: #31b0d5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <a href="{{ route('tasks.index') }}">Back to Tasks List</a>
    </div>
</body>
</html>
