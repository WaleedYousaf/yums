
<html lang="en">
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <style type="text/css">
    .card-img-top{
      min-height: 300px
    }
    .card{
    	margin-bottom: 20px;
    }
    .modal-open {
    padding-right: 0px !important;
    overflow: auto;

}
.modal-open {
    padding-right: 0px !important;
    overflow: hidden;
}
.modal-open {
    overflow: hidden;
    padding-right: 0 !important;
}

.modal-close {
    padding-right: 0px !important;
}

  </style>

</head>
<body>
<div class="container" > 
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/zinger.jpg" onclick="fun(document.getElementById('zingimg'),
          document.getElementById('zingprice'),document.getElementById('zingtitle'))" data-toggle="modal" data-target="#DetailsModal" id="zingimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="zingtitle" style="font-weight: bold;">Zinger Burger</h4>
            <p class="price" id="zingprice" style="font-weight: bold;"> Price : $6.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('zingimg'),
          document.getElementById('zingprice'),document.getElementById('zingtitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/steak.jpg" onclick="fun(document.getElementById('steakimg'),
          document.getElementById('steakprice'),document.getElementById('steaktitle'))" data-toggle="modal" data-target="#DetailsModal" id="steakimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="steaktitle" style="font-weight: bold;">Beef Steak</h4>
            <p class="price" id="steakprice" style="font-weight: bold;"> Price : $8.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('steakimg'),
          document.getElementById('steakprice'),document.getElementById('steaktitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/lasania.jpg" onclick="fun(document.getElementById('lasaniaimg'),
          document.getElementById('lasaniaprice'),document.getElementById('lasaniatitle'))" data-toggle="modal" data-target="#DetailsModal" id="lasaniaimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="lasaniatitle" style="font-weight: bold;">Lasagna</h4>
            <p class="price" id="lasaniaprice" style="font-weight: bold;"> Price : $12.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('lasaniaimg'),
          document.getElementById('lasaniaprice'),document.getElementById('lasaniatitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">
          <img src="gallery/alfredo.jpg" onclick="fun(document.getElementById('alfredoimg'),
          document.getElementById('alfredoprice'),document.getElementById('alfredotitle'))" data-toggle="modal" data-target="#DetailsModal" id="alfredoimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="alfredotitle" style="font-weight: bold;">Fettuccine Alfredo</h4>
            <p class="price" id="alfredoprice" style="font-weight: bold;"> Price : $9.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('alfredoimg'),
          document.getElementById('alfredoprice'),document.getElementById('alfredotitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/chowmein.jpg" onclick="fun(document.getElementById('chowmeinimg'),
          document.getElementById('chowmeinprice'),document.getElementById('chowmeintitle'))" data-toggle="modal" data-target="#DetailsModal" id="chowmeinimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="chowmeintitle" style="font-weight: bold;">Chicken Chow Mein</h4>
            <p class="price" id="chowmeinprice" style="font-weight: bold;"> Price : $9.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('chowmeinimg'),
          document.getElementById('chowmeinprice'),document.getElementById('chowmeintitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/fishburger.jpg" onclick="fun(document.getElementById('fishburgerimg'),
          document.getElementById('fishburgerprice'),document.getElementById('fishburgertitle'))" data-toggle="modal" data-target="#DetailsModal" id="fishburgerimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="fishburgertitle" style="font-weight: bold;">Fish Burger</h4>
            <p class="price" id="fishburgerprice" style="font-weight: bold;"> Price : $8.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('fishburgerimg'),
          document.getElementById('fishburgerprice'),document.getElementById('fishburgertitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/fillet.jpg" onclick="fun(document.getElementById('filletimg'),
          document.getElementById('filletprice'),document.getElementById('fillettitle'))" data-toggle="modal" data-target="#DetailsModal" id="filletimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="fillettitle" style="font-weight: bold;">Fish Fillet</h4>
            <p class="price" id="filletprice" style="font-weight: bold;"> Price : $11.99 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('filletimg'),
          document.getElementById('filletprice'),document.getElementById('fillettitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/dessert.jpg" onclick="fun(document.getElementById('dessertimg'),
          document.getElementById('dessertprice'),document.getElementById('desserttitle'))" data-toggle="modal" data-target="#DetailsModal" id="dessertimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="desserttitle" style="font-weight: bold;">Ice Creame</h4>
            <p class="price" id="dessertprice" style="font-weight: bold;"> Price : $3.49 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('dessertimg'),
          document.getElementById('dessertprice'),document.getElementById('desserttitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">

          <img src="gallery/golgappay.jpg" onclick="fun(document.getElementById('golgappyimg'),
          document.getElementById('golgappyprice'),document.getElementById('golgappytitle'))" data-toggle="modal" data-target="#DetailsModal" id="golgappyimg" style="width: 100%; height: 250px;">

          <div class="card-body">
            <h4 class="card-title" id="golgappytitle" style="font-weight: bold;">Gol Gappay</h4>
            <p class="price" id="golgappyprice" style="font-weight: bold;"> Price : $2.49 </p>
            <p class="card-text">If you like it hot and spicy, a...</p>
            <button class="btn btn-sm btn-success" onclick="fun(document.getElementById('golgappyimg'),
          document.getElementById('golgappyprice'),document.getElementById('golgappytitle'))" data-toggle="modal" data-target="#DetailsModal">Details </button>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>


</body>
</html>
