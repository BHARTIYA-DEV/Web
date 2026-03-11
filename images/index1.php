<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <header>
    <nav class="navbar">


      <div><a href=""></a>Home</div>
      <div>Content</div>
      <div>Contact Us</div>
      <div>About</div>


    </nav>


  </header>
  <main>

    <div class="leftSection">


      <h2>Category </h2>  
      <div class="categories">

        <div onclick="myfunction()">1.Furniture</div>
        <div onclick="myfunction1()">2.Laptops</div>
        <div onclick="myfunction2()">3.Kitchen Appliance</div>
        <div onclick="myfunction3()">4.Accessories</div>
        <div onclick="myfunction4()">5.Makeup Items</div>

      </div>




    </div>
    <div class="rightSection">

      <h2>Products</h2>

      <div class="images">

        <img src="images/furniture.png" alt="furniture" id="furniture">
        <img src="images/laptop.png" alt="laptop" id="laptop">
        <img src="images/appliances.png" alt="appliances" id="appliances">
        <img src="images/accessories.png" alt="accessories" id="accessories">
        <img src="images/makeup.png" alt="makeup" id="makeup">


      </div>

    </div>




  </main>

  <footer>

    Copyright &#169; | 2025


  </footer>




  <script>
    function myfunction() {

      document.getElementById("furniture").style.display = "block";
      document.getElementById("furniture").style.width = "100%";
      document.getElementById("furniture").style.height = "89%";
      document.getElementById("laptop").style.display = "none";
      document.getElementById("appliances").style.display = "none";
      document.getElementById("accessories").style.display = "none";
      document.getElementById("makeup").style.display = "none";
    }

    function myfunction1() {

      document.getElementById("laptop").style.display = "block";
      document.getElementById("laptop").style.width = "100%";
      document.getElementById("laptop").style.height = "89%";
      document.getElementById("furniture").style.display = "none";
      document.getElementById("appliances").style.display = "none";
      document.getElementById("accessories").style.display = "none";
      document.getElementById("makeup").style.display = "none";
    }


    function myfunction2() {
      document.getElementById("appliances").style.display = "block";
      document.getElementById("appliances").style.width = "100%";
      document.getElementById("appliances").style.height = "89%";
      document.getElementById("laptop").style.display = "none";
      document.getElementById("furniture").style.display = "none";
      document.getElementById("accessories").style.display = "none";
      document.getElementById("makeup").style.display = "none";
    }

    function myfunction3() {
      
      document.getElementById("accessories").style.display = "block";
      document.getElementById("accessories").style.width = "100%";
      document.getElementById("accessories").style.height = "89%";
      document.getElementById("laptop").style.display = "none";
      document.getElementById("appliances").style.display = "none";
      document.getElementById("furniture").style.display = "none";
      document.getElementById("makeup").style.display = "none";
    }

    function myfunction4() {
      document.getElementById("makeup").style.display = "block";
      document.getElementById("makeup").style.width = "100%";
      document.getElementById("makeup").style.height = "89%";
      document.getElementById("laptop").style.display = "none";
      document.getElementById("appliances").style.display = "none";
      document.getElementById("accessories").style.display = "none";
      document.getElementById("furniture").style.display = "none";
    }
  </script>









</body>

</html>

<!-- <script>
function myfunction()
{
 document.getElementById("furniture").style.css.display="block";
 document.getElementById("office").style.css.display="none";
 document.getElementById("Kitchen").style.css.display="none";
}
</script>


<a href="#" onclick="myfunction()">Furniture </a> -->
<!-- 
<script>
function myfunction()
{
 document.getElementById("furniture").style.css.display="block";
 document.getElementById("office").style.css.display="none";
 document.getElementById("Kitchen").style.css.display="none";
}

function myfunction1()
{
 document.getElementById("furniture").style.css.display="none";
 document.getElementById("office").style.css.display="none";
 document.getElementById("Kitchen").style.css.display="block";
}

function myfunction2()
{
 document.getElementById("furniture").style.css.display="none";
 document.getElementById("office").style.css.display="block";
 document.getElementById("Kitchen").style.css.display="n";
}
</script>  -->