<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cloud Computing - Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
          box-sizing: border-box;
          font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
          font-size: 16px;
        }
        body {
          background-color: #f4f4f4;
          padding: 20px;
          margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url('c.jpg');
            background-repeat: repeat;
            background-position: center;
            background-size: cover;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            background-image: url('c.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        
        .contact {
          width: 400px;
          background-color: #ffffff;
          box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
          margin: 100px auto;
        }
        .contact h1 {
          text-align: center;
          color: #5b6574;
          font-size: 24px;
          padding: 20px 0;
          border-bottom: 1px solid #dee0e4;
        }
        .contact form {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          padding-top: 20px;
        }
        .contact form label {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 50px;
          height: 50px;
          background-color: #3274d6;
          color: #ffffff;
        }
        .contact form input[type="text"],
        .contact form input[type="email"],
        .contact form textarea,
        .contact form input[type="password"] {
          width: 310px;
          height: 50px;
          border: 1px solid #dee0e4;
          margin-bottom: 20px;
          padding: 0 15px;
        }
        .contact form textarea {
          height: 100px;
        }
        .contact form input[type="submit"] {
          width: 100%;
          padding: 15px;
          margin-top: 20px;
          background-color: #3274d6;
          border: 0;
          cursor: pointer;
          font-weight: bold;
          color: #ffffff;
          transition: background-color 0.2s;
        }
        .contact form input[type="submit"]:hover {
          background-color: #2868c7;
          transition: background-color 0.2s;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="contact">
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Your Name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Your Email" id="email" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Your Password" id="password" required>

            <label for="message">Message:</label>
            <textarea name="message" placeholder="Your Message" id="message" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </div>
</body>
</html>
