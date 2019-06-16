<?php
    include('db.php');
    session_start();
    $vaarin = "";

    if(!isset($_SESSION['username'])){
        header("location: ../login.php");

    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../login.php");
            
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
                $vaarin = "valitse kuva";
            }
            else
            {
                if (file_exists($target_file)) {
                    $vaarin = "Sama kuva on jo ladattu!";
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
                        $vaarin = "valitse kuva joka on muodossa  jpg / png / gif";
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
                            $vaarin = "Kuvan lataamisessa tapahtui virhe!";
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
              $kuvat_html .= "<div id='kuva' >";
              $kuvat_html .= "<p style:'margin:3px'>".$row[1]."</p>";
              $kuvat_html .= "<a href='../galleria/".$row[4]."'  data-lightbox='roadtrip'/> <img src='../galleria/".$row[7]."'/></a >";
              $kuvat_html .= "<p id='desc'>".$row[3]."</p>";
              $kuvat_html .= "<button type='submit' class='link-input'>"."<a href='lisaakuva.php?delbutton=$row[0]' class=''>"."Poista"."</a>"."</button>";
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
    <link rel="stylesheet" href="../assets/css/edit-style.css">
    <script src="../assets/js/lightbox.js"></script>
    
    <script> //Valikonpiilotus
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
    </script>
    <style>

    

    </style>
  </head>
  <body>

    <?php include 'admin-header.php';?>
    <?php include 'admin-nav.php';?>
    
    <div class="lataakuva container-x">
    
        <?php echo $vaarin;?>
        
        <form action="lisaakuva.php" method="post" enctype="multipart/form-data"><br>
        <label style="float:left;" for="enimi">Otsikko:</label><br>
        <input class="css-input" type="text" name="otsikko"  placeholder="Anna kuvalle otsikko"><br>
        <textarea class="css-input" type="text" rows="4" cols="23" name="image_text"></textarea>
        <label style="font-size:25px;" for="enimi">Valitse ladattava kuva:</label><br>
        <input type="file" name="image" id="image" ><br>
        <input type="submit" value="Upload Image" name="submit"><br>
        </form>
    
    </div>

    <div class="kuvat">
        <?php echo $kuvat_html;?>

    </div>

<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>


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
