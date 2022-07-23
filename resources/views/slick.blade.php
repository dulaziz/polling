<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slick 1</title>
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Our CSS -->
    <style>
        body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    max-width: 640px;
    margin: 0 auto;
    background: #999;
}
    </style>
</head>
<body>    

    <div class="slider">
        <div>your content 1</div>
        <div>your content 2</div>
        <div>your content 3</div>
        <div>your content 4</div>
        <div>your content 5</div>
        <div>your content 6</div>
    </div>  

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Our Script -->
    <script type="text/javascript">
    $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2500,
    });
  });
    </script>
</body>
</html>