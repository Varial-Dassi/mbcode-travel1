<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>mbcode-travel1</title>
    
</head>
<body>
    <div class="container h-100">
        <div class="mt-5">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                <div class="card">
                <h1 class="text-center text-primary"><b><u>mbcode-travel1</u></b></h1>
                
                <div class="row">
                <div class="col-3 pl-5"><label for="nom">nom:</label></div>
                <div class="col-9 pr-5"> <input id="nom" class="form-control" type="text" placeholder="nom client"></div>
                </div>
                <br>
                <div class="row">
                <div class="col-3 pl-5"><label for="prenom">prenom:</label></div>
                <div class="col-9 pr-5"><input id="prenom" class="form-control" type="text" placeholder="prenom client"></div>
                </div>
                <br>
                <div class="row">
                <div class="col-3 pl-5"><label for="email">Email:</label></div>
                <div class="col-9 pr-5"><input id="email" class="form-control" type="email" placeholder="Email client"></div>
                </div>
                <br>
                <div class="row">
                <div class="col-3 pl-5"><label for="spam">Telephone:</label></div>
                <div class="col-9 pr-5"><input id="spam" class="form-control" type="tel" placeholder=" Numero telephone"></div>
                </div>
                <br>
                <div class="row">
                <div class="col-3 pl-5"><label for="national">Nationalite:</label></div>
                <div class="col-9 pr-5"><input id="national" class="form-control" type="text" placeholder="Nationalite"></div>
                </div>
                <br>
                <div class="row">
                <div class="col-12 text-center"><button id="submit" type="submit" class="btn btn-primary">Envoyer</button></div>
                </div>
                <br>
                <div id="display"></div>
                
            
                </div>
                <div class="col-2"></div>
                </div>
                </div>
                
        </div>
    </div>

    
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#submit').click(function(){
          var nm = $("#nom").val();
          alert($("#nom").val());
          var pnm = $("#prenom").val();
          var em = $("#email").val();
          var spm = $("#spam").val();
          var nat = $("#national").val();
         // var dataString = "nm1="+ nm + "pnm1="+ pnm + "em1="+ em + "nat1=" + nat;
          if(nm=="" || pnm=="" || em=="" || nat=="" ){
              $("#display").html("<div class='alert alert-warning'>verifier vos champs.</div>");
          }
          else{
             $.ajax({
                  type: "POST",
                  url: "src/controle/create-client.php",
                  data: {
                      nm:nm,
                      pnm:pnm,
                      em:em,
                      spm:spm,
                      nat:nat
                    },
                  success: function(result){
                      //alert(result);
                      $("#display").html(result);
                  }
              });
          }
          return false
        });
        });
    </script>    
</body>
</html>