<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            background-color: #0275d8;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            align-self: flex-start;
        }

        button:hover {
            background-color: #025aa5;
        }

        .back-link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            font-size: 14px;
            color: #666;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}" required>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $task->description }}</textarea>
            </div>
            <button type="submit">Update Task</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="back-link">Back to Task List</a>
    </div>
</body>
</html>
