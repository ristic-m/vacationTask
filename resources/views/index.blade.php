<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
<form action="/show.blade.php" method="POST">
    <label for="text">Name</label>
    <input type="text">

    <label for="text">Date of vacation</label>
    <input type="text">

    <label for="text">Availability</label>
    <select name="availability" id="availability">
        <option value=""></option>
        <option value="remote">Remote</option>
        <option value="unavailable">Unavailable</option>
        <option value="uponRequest">Upon Request</option>
    </select>

    <button type="submit">Send</button>
</form>

</body>
</html>
