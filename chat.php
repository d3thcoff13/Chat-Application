<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/chat.js"></script>
		<script type="text/javascript">
			window.onload = function(){
				$('#sender').keyup('keyup', send);
				$("#listen").click('click', recieve);
				$('#users').load('load', users);
			};
		</script>
	</head>
	<body>
		<h1 id="users"></h1>
		<div class="send">
			<form >
				<p>Username: <input type = "text" id="username"/></p>
				<p>Password: <input type = "text" id="password"/></p>
				<textarea id = "sender" rows = "3" cols = "80">Enter message here</textarea>
				<p id="errors"></p>
			</form>
		</div>
		<div class="recieve">
			<form>
				<div>
					<input type="text" id="listenTo">
					<input type="button" id="listen" value="Listen">
				</div>
				<br/>
				<textarea id = "listener" rows = "3" cols = "80">Recieve messages here...</textarea>
			</form>
	</body>
</html>