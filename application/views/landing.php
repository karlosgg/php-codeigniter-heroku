<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>

<body>
	<div>list.</div>
	<div>
	<?php
		if(isset($userlist)){
			foreach ($userlist as $u) {
				echo $u->User . "<br>";
			}
		}
	?>
	</div>
</body>

</html>