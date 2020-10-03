<!DOCTYPE html>
<html>
<head>

  	<meta charset="UTF-8">
  	<title>A3 AR</title>
  	<link rel="stylesheet" type="text/css"
  	      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	
  	<meta name="description"
  	      content="Міські об’єкти у доповненій реальності.">
  	<meta name="keywords"
  	      content="Доповнена реальність, augmented reality, навігація, Київ, Агенти змін">
  	<meta name="author" content="Агенти змін">
	
  	<meta property="og:title" content="A3 AR" />
  	<meta property="og:description"
  	      content="Міські об’єкти у доповненій реальності." />
  	<meta property="og:url" content="http://ar.a3.kyiv.ua" />
  	<meta property="og:type" content="website" />
	
  	<meta property="og:image"
  	      content="http://ar.a3.kyiv.ua/i/og.png" />
  	<meta property="og:image:secure_url"
  	      content="https://ar.a3.kyiv.ua/i/og.png" />
  	<meta property="og:image:type" content="image/jpeg" />
  	<meta property="og:image:width" content="800" />
  	<meta property="og:image:height" content="800" />
  	<meta property="og:image:alt" content="" />
	
	
  	<link rel="apple-touch-icon" sizes="180x180"
  	      href="/i/favicon/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32"
  	      href="/i/favicon/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16"
  	      href="/i/favicon/favicon-16x16.png">
  	<!-- <link rel="manifest" href="/i/favicon/site.webmanifest"> -->
  	<link rel="mask-icon" href="/i/favicon.svg" color="#000000">
  	<link rel="shortcut icon" href="/i/favicon/favicon.ico">
  	<meta name="msapplication-TileColor" content="#000000">
  	<!-- <meta name="msapplication-config" content="/i/favicon/browserconfig.xml"> -->
  	<meta name="theme-color" content="#000000">

	<link rel="stylesheet" type="text/css" href="http://a3.kyiv.ua/css/style.css">

	<style type="text/css">
		.thumb {
			border-radius: 8px;
		}

		img.logo{
		  vertical-align: middle;
		}

	</style>


</head>
<body class="bg-light">
<div class="container">

	<div class="row">
		<div class="col-12 header">
			<a class="logo" href="http://a3.kyiv.ua" >
				<img class="logo" src="https://cdn.a3.kyiv.ua/logo/a3-logo-small-black.svg" width="40" height="40" alt="" >
  			</a>
  		</div>
	</div>
	
	<div class="row  mb-5">
		<div class="col-lg-8 col-12">
			<h1>AR</h1>
			<p>Файли у форматі доповненої реальності USDZ. Працюють в iOS 12 вище.</p>
		</div>
	</div>


	<script type="text/javascript">
		var files = {

		};
	</script>

	<div class="row">
			<?php

			    function formatSizeUnits($bytes){
			        if ($bytes >= 1073741824)
			        {
			            $bytes = number_format($bytes / 1073741824, 0) . ' GB';
			        }
			        elseif ($bytes >= 1048576)
			        {
			            $bytes = number_format($bytes / 1048576, 0) . ' MB';
			        }
			        elseif ($bytes >= 1024)
			        {
			            $bytes = number_format($bytes / 1024, 0) . ' KB';
			        }
			        elseif ($bytes > 1)
			        {
			            $bytes = $bytes . ' bytes';
			        }
			        elseif ($bytes == 1)
			        {
			            $bytes = $bytes . ' byte';
			        }
			        else
			        {
			            $bytes = '0 bytes';
			        }
			        return $bytes;
				}

				function replace_extension($filename, $new_extension) {
   					$info = pathinfo($filename);
    				return $info['filename'] . '.' . $new_extension;
				}

				$path = ".";

				foreach (glob("ar/*.usdz") as $file) {
					$thumb = replace_extension($file, "png");
					$name = $file;
					$name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
					$name = preg_replace('(ar/)', '', $name);
					echo "
						<div class='col-lg-4 col-12'>
							<a rel='ar' href='$path/$file'><img class='w-100 doc-shadow thumb' src='ar/$thumb'></a>
							<a rel='ar' href='$path/$file'><p class='mt-3 mb-0'>$name</p></a>
							<p class='caption mt-1'>",
							formatSizeUnits(filesize($file)),
							"</p>
						</div>
					
					";

				}

			?> 

		</div>
	</div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>