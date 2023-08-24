<?php
require './include/conn.php';
if (isset($_POST["submit"])) {
  $name = $_POST["name"];

  $description = $_POST["description"];
  $file_name = $_FILES["file"]["name"];
  $file_type = $_FILES["file"]["type"];
  $file_size = $_FILES["file"]["size"];
  $file_tem = $_FILES["file"]["tmp_name"];
  $file_store = "./Img" . $file_name;
  // echo $file_store;
  move_uploaded_file($file_tem, $file_store);

  $adding = "INSERT INTO challenges( name, description, img)
  VALUES('$name','$description','$file_store');";
  mysqli_query($conn, $adding);
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="chalstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <main>
      <!-- 1st Challenge Card  -->
      <div class="container1">
        <div class="content">
          <div class="info">
            <div>
              <h1>Game <span>Master</span> Challenge.</h1>
            </div>
            <div>
              <p>
                Challenge: This is a chess game you have to set a goal to reach
                and complete a level 24 . Share a screenshot or description or
                link to it press here to continue
                <a href="https://www.cbc.ca/kids/games/play/chess-move"
                  ><b>Chess Game </b></a
                >.
              </p>

              <br />
              <div class="container">
                <form method="post" style="color: white">
                  <div class="form-group">
                    <label for="name">Your name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="NAME"
                      name="name"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      id="description"
                      placeholder="DESCRIPTION"
                      name="description"
                      required
                    />
                  </div>
                  <div class="form-group" >
                    <label for="ss">Screenshot</label>
                    <input
                      type="file"
                      class="form-control"
                      id="ss"
                      placeholder="SCREENSHOT"
                      name="file"
                      required
                      style="padding-bottom: 2rem;"
                    />
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="Chess-amico.png" alt="Header" />
        </div>
      </div>
      <br /><br/>
        <!-- 2nd Challenge Card -->
      <div class="container1">
        <div class="image">
          <img src="gamech.jpg" alt="Header" />
        </div>
        <div class="content">
          <div class="info">
            <div>
              <h1>Artistic  <span>Adventure </span> Challenge.</h1>
            </div>
            <div>
              <p>
                Challenge: Create a piece of art that represents your favorite
                summer activity using any medium – drawing, painting, digital
                art, or even a sculpture made from found materials.
                
              </p>

              <br />
              <div class="container">
                <form method="post" style="color: white">
                  <div class="form-group">
                    <label for="name">Your name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="NAME"
                      name="name"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      id="description"
                      placeholder="DESCRIPTION"
                      name="description"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="ss">Screenshot</label>
                    <input
                      type="file"
                      class="form-control"
                      id="ss"
                      placeholder="SCREENSHOT"
                      name="file"
                      required
                    />
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
     <!-- 3rd Challenge  Card  -->
      <div class="container1">
        
        <div class="content">
          <div class="info">
            <div>
              <h1>Artistic  <span>Adventure </span> Challenge.</h1>
            </div>
            <div>
              <p>
                Challenge: Create a piece of art that represents your favorite
                summer activity using any medium – drawing, painting, digital
                art, or even a sculpture made from found materials.
                
              </p>

              <br />
              <div class="container">
                <form method="post" style="color: white">
                  <div class="form-group">
                    <label for="name">Your name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="NAME"
                      name="name"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      id="description"
                      placeholder="DESCRIPTION"
                      name="description"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="ss">Screenshot</label>
                    <input
                      type="file"
                      class="form-control"
                      id="ss"
                      placeholder="SCREENSHOT"
                      name="file"
                      required
                    />
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="gamech.jpg" alt="Header" />
        </div>
      </div>

    </main>
  </body>
</html>
