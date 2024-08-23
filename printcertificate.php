<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blood Donation Certificate</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .certificate {
        width: 80%;
        max-width: 80%;
        height:1000px;
        margin: 50px auto;
        padding: 20px;
        border: 10px solid #c0392b; /* Red border color */
        background-color: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add box shadow */
    }
    h1, h2 {
        text-align: center;
        color: #c0392b; /* Red color */
        text-transform: uppercase; /* Uppercase headings */
    }
    p {
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
        color: #333; /* Dark gray color */
    }
    .recipient-name {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
        text-decoration: underline; /* Add underline to recipient name */
    }
    .date {
        font-style: italic; /* Italicize the date */
    }
    .logo {
        display: block;
        margin: 20px auto;
        max-width: 200px; /* Set max width for logo */
    }
</style>
</head>
<body>
    <div class="certificate">
        <img class="logo" src="logo.png" alt="Logo"> <!-- Add your organization's logo -->
        <h1>Blood Donation Certificate</h1>
        <p>This certifies that</p>
        <h2 class="recipient-name">John Doe</h2>
        <p>has donated blood on <span class="date">April 26, 2024</span> and contributed to saving lives.</p>
        <p>Thank you for your generosity and kindness.</p>
    </div>
</body>
</html>
