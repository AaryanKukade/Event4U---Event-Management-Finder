<!DOCTYPE html>
<html>
  <head>
    <title>Register As An Event Manager</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"
    />
  
  </head>
  <body>
  
  <header class="header">



<nav class="navbar">
  <fieldset>
    <legend><a href="index.php"><h3>BACK TO HOME</h3></a><br></legend>

  <h1>  Event4u - the perfect event management finder.</fieldset>
</nav>

<div id="menu-bars" class="fas fa-bars"></div>

</header>

    <?php require_once('process-form.php') ?>

    <form action="process-form.php" method="post">
      <fieldset>
        <legend>Register As An Event Manager</legend>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required/>

        <label for="name">City</label>
        <input type="text" id="city" name="city" required/>

        <label for="name">Email</label>
        <input type="email" id="email" name="email" required/>

        <label for="name">Contact No.</label>
        <input type="number" id="number" name="number" required />

        <label for="name">Social media handles or company's website URL</label>
        <input type="text" id="url" name="url" required/>

        <label for="name">Birthday Average Cost</label>
        <input
          type="number"
          id="birthdaymin"
          name="birthdaymin"
          placeholder="Min.Cost (in rupees)" required
        />
        <input
          type="number"
          id="birthdaymax"
          name="birthdaymax"
          placeholder="Max.Cost (in rupees)"required
        />
        <label for="name">Wedding Average Cost</label>
        <input
          type="number"
          id="weddingmin"
          name="weddingmin"
          placeholder="Min.Cost (in rupees)"required
        />
        <input
          type="number"
          id="weddingmax"
          name="weddingmax"
          placeholder="Max.Cost (in rupees)"required
        />
        <label for="name">Concert Average Cost</label>
        <input
          type="number"
          id="concertmin"
          name="concertmin"
          placeholder="Min.Cost (in rupees)"required
        />
        <input
          type="number"
          id="concertmax"
          name="concertmax"
          placeholder="Max.Cost (in rupees)"required
        />

        <label for="message">Brief Description About The Company</label>
        <textarea id="about" name="about"required></textarea>

        <br />
      </fieldset>
      <br />
      <div class="form-group">
        <input
          type="submit"
          name="register_event"
          class="btnSubmit btn-block"
          value="submit"
        />
      </div>
    </form>
  </body>
</html>
