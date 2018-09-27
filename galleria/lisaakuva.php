<?php
    include('../db.php');
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: ../adminimg.php");

    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../adminimg.php");
            
    }


    
    if(isset($_POST["submit"])){

            $target_dir = "uploads/";
            $target_thumbdir = "thumbs/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $filetmp = $_FILES["image"]["tmp_name"];
            $filename = $_FILES["image"]["name"];
            $filetype = $_FILES["image"]["type"];
            $filesize = $_FILES["image"]["size"];
            $fileinfo = getimagesize($_FILES["image"]["tmp_name"]);
            $filewidth = $fileinfo[0];
            $fileheight = $fileinfo[1];
            $filepath = "uploads/".$filename;
            $filepath_thumb = "thumbs/"."thumb_".$filename;
            $otsikko = mysqli_real_escape_string($conn, $_POST['otsikko']);
            $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

            if($filetmp == "")
            {
                echo "valitse kuva";
            }
            else
            {
                if (file_exists($target_file)) {
                    echo "Sama kuva on jo ladattu!";
                    $uploadOk = 0;
                }else
                // if($filesize > 5000000000000 )
                // {
                //     echo "photo > 2mb";
                // }
                // else
                {
                    
                    if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/gif")
                    {
                        echo "valitse kuva joka on muodossa  jpg / png / gif";
                    }
                    else
                    {
                    move_uploaded_file($filetmp,$filepath);				
                    if($filetype == "image/jpeg")
                    {
                        $imagecreate = "imagecreatefromjpeg";
                        $imageformat = "imagejpeg";
                    }
                    if($filetype == "image/png")
                    {						 
                        $imagecreate = "imagecreatefrompng";
                        $imageformat = "imagepng";
                    }
                    if($filetype == "image/gif")
                    {						 
                        $imagecreate= "imagecreatefromgif";
                        $imageformat = "imagegif";
                    }
                    $new_width = "200";
                    $new_height = "200";
                        if($uploadOk == 0){
                            echo "Kuvan lataamisessa tapahtui virhe!";
                        }else{
                            //lataa kuvan normi koossa               
                            $image_p = imagecreatetruecolor($new_width, $new_height);
                            $image = $imagecreate($filepath); //kuvan kansio
                            //muuttaa kuvan koon       
                            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $filewidth, $fileheight);						
                            $imageformat($image_p, $filepath_thumb);//thumb kansio		
                
                            $query = "INSERT INTO gallery (otsikko, time, img_path_thumb, img_path, img_name, img_type, image_text) VALUES('$otsikko', NOW(),'$filepath_thumb', '$filepath', '$filename', '$filetype', '$image_text')";
                            $results = mysqli_query($conn, $query);
                        }
                    }
                }
            }
        }

        //kuvan ja tietojen hakeminen kannasta
        $query = "SELECT * FROM gallery";
        $results = mysqli_query($conn, $query);
        $kuvat_html = "";
        if (mysqli_num_rows($results)){
            while ($row = mysqli_fetch_array($results)){
              $kuvat_html .= "<div id='kuva' style='margin:3px;'>";
              $kuvat_html .= "<p style:'margin:3px'>".$row[1]."</p>";
              $kuvat_html .= "<a href='../galleria/".$row[4]."'  data-lightbox='roadtrip'/> <img src='../galleria/".$row[7]."'/></a >";
              $kuvat_html .= "<p id='desc'>".$row[3]."</p>";
              $kuvat_html .= "<button>"."<a href='lisaakuva.php?delbutton=$row[0]' class=''>"."Poista"."</a>"."</button>";
              $kuvat_html .= "</div>";
            }
        }
        //Kuvan poisto
        if(isset($_GET['delbutton'])){
            $gallery_id = $_GET['delbutton'];
            $query = "DELETE FROM gallery WHERE gallery_id='$gallery_id'";
            $res= mysqli_query($conn, $query) or die("Failed".mysqli_error());
            echo "<meta http-equiv='refresh' content='0;url=lisaakuva.php'>";
        }
    


// VANHAA KOODIA.
// if(isset($_POST["submit"])) {
//   //kuvanpaikka
//   $target_dir = "uploads/";
//   $target_thumbdir = "thumbs/";
//   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//   $uploadOk = 1;
//   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//     //tarkistus
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "Tarkistetaan kuvaa - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "Tiedostomuoto ei sallittu!";
//         $uploadOk = 0;
//     }   
//    //onko kuva jo ladattu
//   if (file_exists($target_file)) {
//       echo "Sama kuva on jo ladattu!";
//       $uploadOk = 0;
//   } 
//   //tiedostokoko
//   if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
//       echo "Kuvan tiedostokoko on liian suuri";
//      $uploadOk = 0;
//   } 
//   //tiedostomuoto
//   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//   && $imageFileType != "gif" ) {
//       echo "Vain JPG, JPEG, PNG & GIF tiedostomuodot ovat sallittuja.";
//       $uploadOk = 0;
//   }
//   //kuvan lataaminen
//   if ($uploadOk == 0) {
//       echo "Kuvan lataamisessa tapahtui virhe!";
//   } else {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//             echo "Tiedosto ". basename( $_FILES["fileToUpload"]["name"]). " on ladattu.";
//             echo '<div style="float:left;margin-right:10px"><p>Tässä lataamasi kuva</p>
//                     <img height=150px; width=150px; src="'.$target_file.'" alt="kuvaa ei löydy" /></br>
//                 </div>';
//             $target_thumb=$target_thumbdir."thumb_" . basename($_FILES["fileToUpload"]["name"]);
//             make_thumb($target_file,$target_thumb,300,300);
//         } else {
//             echo "Kuvan lataamisessa tapahtui virhe!";
//         }   
//     }
// }

// function make_thumb($src, $dest, $desired_width, $desired_height) {

// 	/* read the source image */
// 	$source_image = imagecreatefromjpeg($src);
// 	$width = imagesx($source_image);
// 	$height = imagesy($source_image);
	
// 	/* find the "desired height" of this thumbnail, relative to the desired width  */
// 	$desired_height = floor($height * ($desired_width / $width));
	
// 	/* create a new, "virtual" image */
// 	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
// 	/* copy source image at a resized size */
// 	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
// 	/* create the physical thumbnail image to its destination */
//     imagejpeg($virtual_image, $dest);
    
// }
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Päiväkoti Pirtti - Lisää kuva</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/slider.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
    <script src="../assets/js/lightbox.js"></script>
    
    <script> //Valikonpiilotus
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
    </script>
    <style>
    input[type=text], select  {

        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
      background-color: darkgray;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 60%;
    transition: all 0.5s ease 0s;
    font-size: 20px;
    }
    input[type=submit]:hover {
        background-color:#54ff62;
    }


          #kuva {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
        background: #00000071;
      }

      #kuva:hover {
        border: 1px solid #777;
      }

      #kuva img {
        width: 100%;
        height: auto;
      }

      #desc {
      padding: 15px;
      text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button name="myButton" id="hide">
            <div class="juttu" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div></button>
        <nav>
          <ul>
            <li class="current tab1"><a href="../index.html" class="fa fa-home">&nbsp;Etusivu </a></li>
            <li  class="tab4"><a href="../yhteystiedot.html" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
            <li  class="tab5 dropdown">
              <a class="fa fa-file" href="javascript:void(0)" class="dropbtn" >&nbsp;Hakemukset</a>
              <div class="dropdown-content">
              <a href="../paivahoitohakemus.html">Päivähoitohakemus</a>
              <a href="../esiopetushakemus.html">Esiopetushakemus</a>
              <a href="../palvelusetelihakemus.html">Palvelusetelihakemus</a>
              </div>
              </li>
            <li  class="tab6"><a href="../kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
            </ul>
          </nav>
          <p> <a href="lisaakuva.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
          <p> <a href="../password_change.php" style="color: red;">Vaihda salasana</a> </p>    

      </div>
    </header>
  <hr class="style-two">
  <center>
<div class="lataakuva">
    <form action="lisaakuva.php" method="post" enctype="multipart/form-data"><br>
      <label style="float:left;" for="enimi">Otsikko:</label><br>
      <input class="css-input" type="text" name="otsikko"  placeholder="Anna kuvalle otsikko"><br>
      <textarea rows="4" cols="50" name="image_text"></textarea>
      <label style="font-size:25px;" for="enimi">Valitse ladattava kuva:</label><br>
      <input type="file" name="image" id="image"><br>
      <input type="submit" value="Upload Image" name="submit"><br>
    </form></center>
</div>
<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>

    <?php echo $kuvat_html;

    ?>
  </body>
  <script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>
<script>
// When the user clicks on the button, scroll to the top of the document
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>
