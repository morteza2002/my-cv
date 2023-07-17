<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--font awsome cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custome css style -->

    <link rel="stylesheet" href="style.css" />

    <?php 
      $data = $_POST;

      
    ?>

    <title>Document</title>
  </head>
  <body>
    <form method="post" action="generate.php">
      <div class="container">
        <div class="peofile">
          <label for="">your personal info</label>
          <br /><br />
          <?= $_POST['imgprofile'] ?>
          <br />
          <br />
          <h3>
            <label for="nameField">Your name:</label>

            <?= $_POST['name'] ?>
          </h3>
          <br />
          <h3>
            <label for="namelField">Your last:</label>

            <?= $_POST['lname'] ?>
          </h3>
          <br />
          <p style="transform: translate(50px, 0px)">
            <label for="jobField">Your job:</label>
            <?= $_POST['job'] ?>
          </p>
        </div>

        <div class="information">
          <div class="about">
            <h3 class="title">about me</h3>
            <p>
              <label for="aboutField">Your about:</label>
              <?= $_POST['info'] ?>
            </p>

            <div class="box_container">
              <div class="box">
                <h3>
                  <span>age :</span
                  ><?= $_POST['bday'] ?>
                </h3>
                <h3>
                  <span>adress :</span
                  ><?= $_POST['adress'] ?>
                </h3>
                <h3>
                  <span>number :</span><label for="phonefield"></label>
                  <?= $_POST['phone'] ?>
                </h3>
                <h3>
                  <span>email :</span
                  ><?= $_POST['email'] ?>
                </h3>
              </div>

              <div class="box">
                <h3>
                  <span>skill :</span>
                  <?= $_POST['skill'] ?>
                </h3>
                <h3>
                  <span>language :</span
                  ><?= $_POST['language'] ?>
                </h3>
                <h3>
                  <span>experiencce :</span
                  ><?= $_POST['experiencce'] ?>
                </h3>
                <h3>
                  <div>
                  <?= $_POST['freelance'] ?>
                    <label for="subscribeNews"
                      ><span>freelance available</span><?= $_POST[''] ?></label
                    >
                  </div>
                </h3>
              </div>
            </div>
          </div>
        </div>

        <button class="btn1" onclick="generateCv()">Generate CV</button>
      </div>
    </form>
  </body>
</html>
