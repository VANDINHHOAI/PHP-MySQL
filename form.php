<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="insert.php" method="post">
        <h1>FORM INSERT</h1>
        <label for="email">Email:</label>
        <input name="email" type="text" placeholder="Email" id="email">
        <label for="password">Password:</label>
        <input name="password" type="text" placeholder="Your password" id="password">   
        <button type="submit">INSERT</button>
    </form>

    <form action="update.php" method="post">
        <h1>FORM UPDATE</h1>

        <label for="email_ud">Email:</label>
        <input name="email_update" type="text" placeholder="Email" id="email_ud">

        <label for="password_ud">Password:</label>
        <input name="password_update" type="text" placeholder="Your password" id="password_ud">

        <label for="role_ud">role:</label>
        <input name="role_update" type="text" placeholder="Your role" id="role_ud">

        <label for="id_ud">ID:</label>
        <input name="id_update" type="text" placeholder="ID" id="id_ud">

        <button type="submit">UPDATE</button>
    </form>

    <form action="delete.php" method="post">
        <h1>FORM DELETE</h1>
        <label for="id_dlt">ID TO DELETE:</label>
        <input name="id_delete" type="text" placeholder="ID" id="id_dlt">

        <button type="submit">DELETE</button>
    </form>

    <form action="select.php" method="post">
        <h1>FORM SELECT</h1>
        <button type="submit">Select data from database</button>
    </form>
</body>
</html>