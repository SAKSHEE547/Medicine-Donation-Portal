



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mail.css">
</head>
<body>
    <div class="container">
        <h1>Contact Form</h1>
        <form action="https://formsubmit.co/el/seyeko" method="POST">
            <input type="text" name="Name" placeholder="Full Name" required>
            <input type="email" name="Email" placeholder="Email" required>
            <select name="Continent" placeholder="Vicinity">
                <option >Pune</option>
                <option >Mumbai</option>
                <option >GhatKopar</option>
                <option >Mulund</option>
                <option >Thane</option>
            </select>
            <textarea name="Message" placeholder="Message" required></textarea>

            <button name="submit" type="submit" value="redirect"><a href="needy.php">Send</a></button>
        </form>
    </div>
</body>
</html>