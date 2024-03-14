<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
	<div class="row">
		<div class="col-md-10 mx-auto">
  <h2>Login with FB And Google</h2><hr>

  <a href="<?=base_url()?>google_login/login" type="button" class="btn btn-success btn-lg">Google-Login</a>
  <a href="<?=base_url()?>user_authentication" type="button" class="btn btn-success btn-lg">Google-Login-with-Codexworld</a>
  <a href="" type="button" class="btn btn-primary btn-lg">Facebook-Login</a>
     
</div>
</div>
</body>
</html>
