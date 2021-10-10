<!doctype html>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<link href="./content/css/controls.css" rel="stylesheet">
<link href="./content/css/heroes.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:type" content="website">
<meta property="og:title" content="Clearkey Hex to Base64 Converter">
<meta property="og:description" content="Transform your Clearkey in HEX format to Base64 with JSON output by PHP. Powered by Sam Sam.">
<title>Clearkey Hex to Base64 Converter</title>
</head>
<body>
<div class="px-4 py-5 my-5 text-center"> <h1 class="display-5 fw-bold">Clearkey Hex to Base64 Converter</h1>  </br>
<h2 class="lead mb-4">Transform your Clearkey in HEX format to Base64 with JSON output by PHP.</br>Powered by <a href="https://github.com/samleong123">Sam Sam</a>.</br>Source code: <a href="https://github.com/samleong123/heroku-clearkey-hex-base64-json">here</a>./h2>
   <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
  
			
				  </div>
	  </br>
   <form class="p-4 p-md-5 border rounded-3 bg-light"id="signup-form" method="get" action="results.php">
         
           <div class="form-floating mb-3">
            <input type="keyid" class="form-control" name="keyid" id="keyid" placeholder="Key ID in Hex">
            <label for="floatingPassword">Key ID in Hex</label>
          </div>
		     <div class="form-floating mb-3">
            <input type="key" class="form-control" name="key" id="key" placeholder="Key in Hex">
            <label for="floatingPassword">Key in Hex</label>
          </div>
	
          <button type="submit" class="w-100 btn btn-lg btn-primary"  id="btn-submit">Generate now</button>
          <hr class="my-4">
          <small class="text-muted"><strong>By clicking Generate now, you might be violating your streaming platform's terms of services. We shall not be liable for any problem that will produce losses or inconveniences incurred as a result of such changes or differences.</strong></small>
        </form>
	</body>
	</html>
