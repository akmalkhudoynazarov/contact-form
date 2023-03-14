<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form id="myForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required /><br /><br />

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="whereto">Where To:</label>
      <input type="text" id="whereto" name="whereto" required /><br /><br />

      <label for="wherefrom">Where From:</label>
      <input type="text" id="wherefrom" name="wherefrom" required /><br /><br />

      <button type="submit">Submit</button>
    </form>

    <div id="message"></div>

    <script src="script.js"></script>
  </body>
</html>
