<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Hi {{ $data['name'] }}</h1>
    <p> You have been assigned the task {{ $data['task'] }} by {{ $data['user'] }}</p>
    <p>This task involves: {{ $data['description'] }}</p>
</body>
</html>