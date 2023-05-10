<!DOCTYPE html>
<html>

<head>
  <title>Will Swiston Personal Website</title>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <link rel="stylesheet" type="text/css" href="./contact.css">
  <link rel="stylesheet" href="./header.css">
  <script src="contact.js"></script>
</head>
<body>
  <div class="header">
    <script src="./header.js"></script>
    <div class="inner-header-wrapper">
      <p class="name">Will Swiston</p>
      <div class="options-wrapper">
        <a href="../index.html">About me</a>
        <a href="./portfolio.html">Portfolio</a>
        <a href="./contact.html">Contact</a>
        <select name="styleSelector" id="styleSelector" onchange="onStyleSelect();">
          <option value="dark">Dark</option>
          <option value="light">Light</option>
        </select>
      </div>
    </div>
  </div>
  <div class="contact-wrapper">
    <h1 class="contact-title">Contact me!</h1>
    <div class="form-wrapper">
      <form method="post" action="submit.php"> 
        <label for="contact-name">Enter your name</label>
        <input type="text" id="name">
        <label for="contact-email">Enter your email</label>
        <input type="text" id="contact-email">
        <label for="contact-message">Message</label>
        <textarea id="contact-message" class="text-area"></textarea>
        <div class="pair">
          <label for="star_1"> 1</label>
          <input type="radio" name="rate" id="star_1" value="1">
        </div>
        <div class="pair">
          <label for="star_2"> 2</label>
          <input type="radio" name="rate" id="star_2" value="2">
        </div>
        <div class="pair">
          <label for="star_3"> 3</label>
          <input type="radio" name="rate" id="star_3" value="3">
        </div>
        <div class="pair">
          <label for="star_4"> 4</label>
          <input type="radio" name="rate" id="star_4" value="4">
        </div>
        <div class="pair">
          <label for="star_5"> 5</label>
          <input type="radio" name="rate" id="star_5" value="5" checked="checked">
        </div>
        <input type="submit" name="submit" class="submit">
      </form>
  </div>
</body>

</html>