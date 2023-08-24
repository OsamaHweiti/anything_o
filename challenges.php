<?php
require './include/conn.php';
if (isset($_POST["submit"])) {
  $name = $_POST["name"];

  $description = $_POST["description"];


  if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
    $file_name = $_FILES["file"]["name"];
    $file_tem = $_FILES["file"]["tmp_name"];
    $file_store = "./Img/" . $file_name;
    
    // Move the uploaded file to the desired location
    move_uploaded_file($file_tem, $file_store);
    
    $adding = "INSERT INTO challenges (name, description, img) VALUES ('$name','$description','$file_store');";
    mysqli_query($conn, $adding);
}

 

  
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
    <!-- nav bar  -->
    <nav class="navbar navbar-expand-lg py-3 ">
          <div class="pe-lg-0 ps-lg-5 container-fluid justify-content-between">
              <a class="navbar-brand" href="#">
                  <img src="/static_files/images/logo.png" height="60" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <div class="nav_left d-lg-flex align-items-center">
                      <nav>
                          <div class="nav d-block d-lg-flex nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                  type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                              <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                                  type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
                              <button class="nav-link" id="timing-tab" data-bs-toggle="tab" data-bs-target="#timing"
                                  type="button" role="tab" aria-controls="timing" aria-selected="false">Timing</button>
                              <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                                  type="button" role="tab" aria-controls="courses" aria-selected="false">Courses</button>
                          </div>
                      </nav>
                      <div class="position-relative d-inline-block me-lg-4">
                          <input class="search_input ms-5 mb-3 mb-lg-0 ms-lg-0 pe-5 ps-3" type="search" placeholder="Search"
                              aria-label="Search">
                          <img class="position-absolute search_img" src="/static_files/svgs/search.svg" width="16" height="16"
                              alt="twitter">
                      </div>
                  </div>
              </div>
          </div>
      </nav>


    <!-- main content  -->
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
                <form method="post" style="color: white" enctype="multipart/form-data">
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
                      id="file"
                      placeholder="SCREENSHOT"
                      name="file"
                      required
                     
                    />
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="./img/Chess-amico.png" alt="Header" />
        </div>
      </div>
      <br /><br/>
        <!-- 2nd Challenge Card -->
      <div class="container1">
        <div class="image">
          <img src="./img/arrttttiistt.jpeg" alt="Header" />
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
                <form method="post" style="color: white" enctype="multipart/form-data">
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
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <br /><br/><br /><br/><br /><br/>
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
                <form method="post" style="color: white" enctype="multipart/form-data">
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
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="./img/outdoor.png" alt="Header" />
        </div>
      </div>

    </main>
  </body>
</html>
