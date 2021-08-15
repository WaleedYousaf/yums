<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm1-traditional.dtd">
<html xmIns="http://www.w3.org/1999/xhtmI">
<head>
 <title>Modal</title>
<style type="text/css">
 .modal-open {
    padding-right: 0px !important;
    overflow: auto;

}
.modal-close {
    padding-right: 0px !important;
}
.modal-open{overflow:auto;padding-right:0 !important;}
.modal-open {
    overflow: hidden;
    padding-right: 0 !important;
}
.modal {
    
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}


@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


</style>

</head>
<body>

<div id="DetailsModal" class="modal" style="" role="dialog" style="opacity: 60%;">
  <div class="modal-dialog modal-lg" style="">  
  <form id="modalformid" class="modal-content modal-content-menuitem animate" method="post" action="addtocart_db.php" style="width: 800px; margin-top: -80px ">
    
    

    <div class="container inside_modal inside_modal-menuitem" style=" color: #1a1a1a;min-width: -webkit-fill-available;  ">
      <button type="button" class="close" data-dismiss="modal">&times;</button>  

      <img id="genimage" class="card-img-top card-img-top-cover" src="gallery/zinger.jpg" alt="img" style="max-height: 440px;padding: 10px">

      <div class="card-body">
            <h4 class="card-title" id="gentitle" style="font-weight: bold;" align="center" >General Item</h4>
            <p class="card-text">If you like it hot and spicy, a Zinger burger will be sure to hit the spot. This 100% chicken breast fillet is coated in spicy Zinger flavouring and served with fresh crisp lettuce, red onion and sweet mayo on a seeded bun.</p>
            
            <p class="price" id="genprice" style="font-weight: bold;"> Price : </p>
            
            <input type="hidden" name="titletodb" id="titletodb" value="" width="">
            <input type="hidden" name="pricetodb" id="pricetodb" value="">
            <input type="hidden" name="quantitytodb" id="quantitytodb" value="">
            <input type="hidden" name="tpricetodb" id="tpricetodb" value="">


                <label> Quantity : </label>
                 <select name="genquantity" id="genquantity" style=" width: 30%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                 </select>
    </div>
    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-warning" onclick="add_to_cart()"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
    </div>

   </div> 
  </form>
</div>

</div>



<script type="text/javascript">
     
    
      //var details=document.getElementById('Modal_Details');
      var price=document.getElementById("genprice");
      var imag=document.getElementById("genimage");
      var title=document.getElementById("gentitle");
      var quantity=document.getElementById("genquantity");
    
    function fun(I,P,T)
    {
      imag.src=I.src;
      title.innerHTML=T.textContent;
      price.innerHTML=P.textContent;
    }
    
    function add_to_cart()
    {
       var Quany=parseInt(quantity.value);
       var price_str=price.textContent;
       var p=price_str.slice(10);
       var pfloat=parseFloat(p);
       var pr=parseFloat(p)*Quany;
       //var tmp=title.textContent;

       // alert("in add to cart");
       document.getElementById('titletodb').value=title.textContent;
       document.getElementById('pricetodb').value=pfloat;
       document.getElementById('quantitytodb').value=Quany;
       document.getElementById('tpricetodb').value=pr;
       // alert("title is "+tmp+" and price string is "+price_str+" and price sliced is "+p+" and total price is "+pr);


       document.getElementById('modalformid').submit();
    }

    var modal = document.getElementById('DetailsModal');

    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    $(document.body).on('hide.bs.modal,hidden.bs.modal', function () {
        $('body').css('padding-right','0');
    });

  </script>














<script>
// Get the modal

</script>







</body>
</html>