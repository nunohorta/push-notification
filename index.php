<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Push Notifications</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
 
  		<h2>Push Notifications</h2>


        <div class="bs-example">
		    <form>
		        <div class="form-group">
		            <label for="title">Title</label>
		            <input type="text" class="form-control" id="title" placeholder="">
		        </div>
		        <div class="form-group">
		            <label for="message">Message</label>
		            <input type="text" class="form-control" id="message" placeholder="">
		        </div>

		        <div class="form-group">
		            <label for="badge">Badge Number</label>
		            <input type="text" class="form-control" id="badge" placeholder="">
		        </div>

		        <div class="form-group">
			        <div class="dropdown">
				        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Device
				        <span class="caret"></span></button>
				        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">iPad Mini</a></li>
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">iPad Mini</a></li>
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">iPad 3</a></li>
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">iPhone 6</a></li>
				        </ul>
				      </div>
			      </div>

		        <button type="submit" class="btn btn-primary">Send</button>
		    </form>
		</div>
 	</div>
  </body>
</html>