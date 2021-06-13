<!DOCTYPE HTML>
<html>
    <head>
        <title>Buku Tamu</title>
        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
  <meta name="author" content="">
        <link href="<?php echo base_url("assets/loading.css"); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="load-text">
           <a class="text-load" data-text="Selamat Datang">Selamat Datang</a>
</div>
         <script>
            //The below script changes the page to home after 2.3s using timeout function.
            setTimeout(function(){
            window.location.href="<?php echo site_url("bukutamu/index"); ?>"; 
            },2300);
        </script>



    </body>
</html>