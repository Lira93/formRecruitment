<?php include('server.php'); 
header( 'Content-Type: text/html; charset=utf-8' );?>
<!DOCTYPE html> 
<html> 
<head> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<title>Zadanie rekrutacyjne - BrainBox</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 

<body> 
    <div id="container">
        <h1>Formularz - Brainbox</h1>

    <form onsubmit="return test();" method="post" action="server.php" enctype="multipart/form-data" id="contactForm">

        <div class="form-group">
            <label class="col-2 col-form-label">Imie</label>
            <input type="text" name="name" id="name">
            <div id="iname" class="error"> </div>
        </div>
        <div class="form-group">
            <label class="col-2 col-form-label">Nazwisko</label>
            <input type="text" name="surname" id="surname">
            <div id="isurname" class="error"> </div>
        </div>
        <div class="form-group">
            <label class="col-2 col-form-label">E-mail</label>
            <input type="email" name="email" id="email">
            <div id="iemail" class="error"> </div>
        </div>
        <div class="form-group">
        <label class="col-2 col-form-label">Temat</label>
        <select class=" col-2 col-form-label" name="subject">
            <option value="ocena produktu">Ocena produktu</option>
            <option value="ocena firmy">Ocena firmy</option>
            <option value="inne">Inne</option>
        </select>
        </div>
        <div class="form-group">
        <label class="col-2 col-form-label">Obrazek</label>
        <input type="hidden" name="size" value="1000">
        <input type="file" name="image" /> 
        </div>
        
        <div class="form-group stars">
        
            <input type="radio" id="star1" name="star" value="5">
            <label for="star1" class="labelStar"></label>

            <input type="radio" id="star2" name="star" value="4">
            <label for="star2" class="labelStar"></label>

            <input type="radio" id="star3" name="star" value="3">
            <label for="star3" class="labelStar"></label>

            <input type="radio" id="star4" name="star" value="2">
            <label for="star4" class="labelStar"></label>

            <input type="radio" id="star5" name="star" value="1">
            <label for="star5" class="labelStar"></label>
            <div id="messages" class="error"> </div>
            
            <label class="col-2 col-form-label" style="padding-right: 40px;">Ocena</label>
        </div>
        
        <div class="form-group">
            <label class="col-2 col-form-label">Treść</label>
            <textarea 
      	        id="text" 
      	        cols="40" 
      	        rows="4" 
      	        name="text" 
      	        placeholder="Text.."></textarea>
        </div>
        <div>
            <button type="submit" name="save" class="btn btn-primary center-block" value="Upload Image"> Dodaj</button>
        </div>
    </form>

    <tbody class="row" > 
        <?php 
        
        while ($row = mysqli_fetch_array($results)) { ?>
            <tr> 
                <div class="coments col-6">
                    <td><?php echo $row['name']; ?></td><br>
                    <td><?php echo $row['surname']; ?></td><br>
                    <td><?php echo $row['email']; ?></td><br>
                    <td><?php echo $row['subject']; ?></td><br>
                    <td><?php echo $row['star']; ?></td><br>
                    <td><?php 
                    echo "<div id='img_div'>";
                    echo "<img src='dataformdb/".$row['image']."' >";
                    echo "</div>";
                    ?></td><br>
                    <td><?php 
                     echo "<div style='overflow: scroll; word-wrap: break-word;'>";
                    echo $row['text'];
                    echo "</div>";
                 
                    ?></td><br>

                </div>  
            </tr>    
        <?php 
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   
            {
                $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            }
            //whether ip is from proxy
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
            {
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            //whether ip is from remote address
            else
            {
                $ip_address = $_SERVER['REMOTE_ADDR'];
            }
                echo $ip_address;
            }  
        ?>
    </tbody>

    </div>
    <script type="text/javascript" src="index.js"></script>
</body>
</html> 