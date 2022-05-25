<!doctype html>
<html class="no-js" lang="">



<body>

  <!-- Add your site or application content here -->
<?php 
require_once("header.php");
?>


<main>
  <div class="wrapper">

    <?php
    if(isset($_GET['msg'])){
    echo $_GET['msg'];
    }
    ?>

    <div class="Homepage">
      <h2>C2 opdracht</h2>
        <div class="about">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat earum, impedit laudantium consequuntur rem corporis dolorum perspiciatis nostrum repellendus, iste molestias deleniti quia praesentium similique. Laborum earum veniam tempore. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vitae, ducimus dolorum, dolores quas quos sunt, officiis quasi laborum quisquam autem doloribus ad? Eaque, praesentium! Veniam, corporis! Repellat dicta, illum optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolore voluptatem inventore expedita, cumque ab mollitia commodi facilis possimus modi maiores, blanditiis voluptas architecto necessitatibus! Culpa quod maiores eligendi esse!</p>
          <img src="img/header_img.jpg" alt="">
        </div>  
        <div class="Homepage1">
      <h2>About us</h2>
          <div class="Homepage2">
            <h3>Het bedrijf</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate quod, officia distinctio commodi deserunt reprehenderit molestiae saepe illum repellat, enim vitae atque cum ducimus. Voluptatum officia id unde sunt minus! Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Vel, eveniet eum, ut dicta vitae eos maxime amet sunt nam beatae minima rem illo, cumque adipisci pariatur fuga? Tempora, optio, excepturi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsum nemo et quibusdam illo sunt eius nihil unde impedit expedita nesciunt, vitae odio aspernatur maiores praesentium? Fugiat accusamus repudiandae doloremque? </p>
          </div> 
       </div>   
    </div>
  </div>

</main>


<?php
require_once("footer.php");
?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
