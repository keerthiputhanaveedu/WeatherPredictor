<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
      <style>
          
          html,body{
              height: 100%;
          }
          
          .container{
              background-image: url("meduana-6917.jpg");
              height: 100%;
              width: 100%;
              background-size: cover;
              background-position: center;
              padding-top: 100px;
          }
         
          .center{
              text-align: center;
          }
          
          .white{
              color: white;
          }
          
          p{
              padding-top: 15px;
              padding-bottom: 15px;
          }
          
          button{
              margin-top: 20px;
              margin-bottom: 20px;
          }
          .alert{
              margin-top: 20px;
              display: none;
          }
      
      </style>
</head>
  <body>
 
      <div class="container">
      <div class="row">
        
          <div class="col-md-6 col-md-offset-3 center">
          
            <div class="content">
            <h1 class="center white">Weather Predictor</h1>
            <p class="lead white">Enter the name of your city to get a forecast for the weather</p>
            <form>
            <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris,San Francisco.."/>
            </div>
            
            <button id ="findMyWeather" class="btn btn-success btn-lg">Find my weather</button>
            
            </form>
                <div id="success" class="alert alert-success">Success!</div>
                <div id="fail" class="alert alert-danger">Please enter a valid city and try again!!</div>
                <div id="noCity" class="alert alert-danger">Please enter a city name.</div>
            </div>
              
              
              
          </div>
          
        </div>
      </div>

   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

    $("#findMyWeather").click(function(event) {
        event.preventDefault();
        $(".alert").hide();
        if ($("#city").val()!=""){
        $.get("scrapper.php?city="+$("#city").val(), function( data){
           
            
            
            if (data == ""){
                $("#fail").fadeIn();
            }else{
               $("#success").html(data).fadeIn();
            }
        });
        }
        else{
            $("#noCity").fadeIn();
        }
        
    })
</script>
  </body>
</html>