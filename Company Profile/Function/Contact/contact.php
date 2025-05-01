<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
<div class="wrapper">

  <header class="main-header">
    <h1>Contact Us</h1>
    <nav>
      <ul>
        <li><a href="../../home.php">Home</a></li>
        <li><a href="../About/about.php">About Us</a></li>
        <li><a href="../Contact/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Get in Touch</h2>
      <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Avicenna. This is just a placeholder for the footer.</p>
  </footer>

  </div>

</body>
</html>