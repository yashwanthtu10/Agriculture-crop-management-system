<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>welcome page</title>
     <body background="f.jpg">
      <table align="center" width="800"height="30"></center>
        <td colspan="2" background="hh.jpg"align="center"><font color="white"><h1><b>AGRICULTURE CROP MANAGEMENT SYSTEM </h1></font></u></b>
        <tr></table>

<br>

  <b><font color="gray">GET DOC's ON WEB......</font><b>

<a href ="https://drive.google.com/file/d/1HxdEHCFN0V1qWhXuJYqIvSnGDcyiwIYC/view?usp=drivesdk" type="button" ><button style="background-color:rgb(red);:color:white;width:120px; height: 25px; "value=""> GET START </button></a>

        <tr>
<span style="padding-left:480px;"><a href="log.php" type="button"><button style="background-color:rgb(red);:color:white;width:130px; height: 25px;"value="HOME"><font color="blue">LOGIN</button></tr></a>
<tr>
<span style="padding-left:25px;"><a href="register.php" type="button"><button style="background-color:rgb(red);:color:white;width:130px; height: 25px;"value=""><font color="blue"> NEW USER</button></a>

 <span style="padding-left:30px;"><a href="key.php" type="button"><button  style="background-color:rgb(red);:color:white;width:100px; height:25px;"value=""> <font color="red">ADMIN</button></a>
</tr>

    </div>
</div>
</section>


  <div class="slider">

    <div id="img">
      <img src="e.jpg">
    </div>

  </div>

  <script>

    var images = ['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg', 'e.jpg','f.jpg','g.jpg','h.jpg','i.jpg'];

    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 2500);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";




    }


  </script>


  <style type="text/css">
    .slider {
      width: 100%;
      height: 500px;
      margin: 10px auto;
      box-sizing: border-box;
      overflow: hidden;
      box-shadow: 5px 5px 10px grey;

    }

    img {
      width: 100%;
      height: 100%;
      animation: ani 3s linear;

    }

    @keyframes ani {
      10% {
        transform: scale(1);
      }
      10% {
        transform: scale(1);
      }
      100% {
        transform: scale(1);
      }
    }
  </style>


 

</body>
</html>

