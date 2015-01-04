<?php
	error_reporting(0);

	// build result-page
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$i = urlencode($_POST['i']);
		$h = urlencode($_POST['h']);
		$t = urlencode($_POST['t']);

		$url = "a.php?i=$i&h=$h&t=$t";
		$urlD = "a.php?i=$i&h=$h&t=$t&d=1";
		$extraTitle = "Your Achievement";
	}
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php if (isset($extraTitle)) { echo $extraTitle.' - '; } ?>Minecraft Achievement Generator</title>
	<link rel="stylesheet" type="text/css" href="css/design.css" media="all">
	<meta name="viewport" content="width=device-width">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="css/favicon.png">
	<meta name="description" content="This is a free Minecraft Achievement Generator with many Icons for your website, forums, blogs, YouTube-Channels and much more!"/>
</head>
<body>
	<h1><a href="./"><img class="logo" src="css/logo.png" alt="Minecraft Achievement Generator"/></a></h1>
	<div id="container">

		<?php if (isset($url)) { // show result-page ?>

			<div id="headText">
				<p>Thanks for using this Minecraft Achievement Generator! <a href="./">Create an other one?</a></p>
			</div>
			<div id="output">
				<img id="achievement" src="<?=$url?>" onclick="downloadImage()" alt="Your Achievement"/>
				<div id="links">
					<ul>
						<li>URL:<br /><input type="text" id="out-url" onmouseover="this.select()" value="Enable JavaScript to see this link..."></li>
						<li>HTML-Code:<br /><input type="text" id="out-html" onmouseover="this.select()" value="Enable JavaScript to see this link..."></li>
						<li>BBCode (Forums):<br /><input type="text" id="out-bb" onmouseover="this.select()" value="Enable JavaScript to see this link..."></li>
					</ul>
				</div>
			</div>

			<script>
				document.getElementById('out-url').value = window.location.href + '<?=$url?>';
				document.getElementById('out-html').value = '<a href="' + window.location.href + '" target="_blank"><img src="' + window.location.href + '<?=$url?>' + '" alt="Minecraft Achievement" /></a>';
				document.getElementById('out-bb').value = '[url=' + window.location.href + '][img]' + window.location.href + '<?=$url?>' + '[/img][/url]';

				function downloadImage() {
					window.location.href = window.location.href + "<?=$urlD?>";
				}
			</script>

		<?php } else { // show generator-page ?>

			<div id="headText">
				<p>Create a free Minecraft Achievement in three simple steps:</p>
			</div>
			<div id="form">
				<form method="post" action="./">
					<ul>
						<li>
							<label class="description">1.) Yellow Title</label>
							<input name="h" type="text" tabindex="1" onclick="this.select()" maxlength="25" placeholder="Title goes here" value="Title goes here"/>
						</li>
						<li>
							<label class="description">2.) White Text</label>
							<input name="t" type="text" tabindex="2" onclick="this.select()" maxlength="25" placeholder="Text goes here" value="Text goes here"/>
						</li>
						<li>
							<label class="description">3.) Choose an Icon</label>
							<select name="i" tabindex="3">
								<option value="20" selected="selected">Stone</option>
								<option value="1">Grass</option>
								<option value="21">Wooden Plank</option>
								<option value="13">Crafting Table</option>
								<option value="18">Furnace</option>
								<option value="17">Chest</option>
								<option value="9">Bed</option>
								<option value="31">Coal</option>
								<option value="22">Iron</option>
								<option value="23">Gold</option>
								<option value="2">Diamond</option>
								<option value="11">Sign</option>
								<option value="19">Book</option>
								<option value="24">Wooden Door</option>
								<option value="25">Iron Door</option>
								<option value="14">Redstone</option>
								<option value="12">Rail</option>
								<option value="33">Bow</option>
								<option value="34">Arrow</option>
								<option value="32">Iron Sword</option>
								<option value="3">Diamond Sword</option>
								<option value="35">Iron Chestplate</option>
								<option value="26">Diamond Chestplate</option>
								<option value="6" >TNT</option>
								<option value="27">Flint And Steel</option>
								<option value="15">Fire</option>
								<option value="36">Bucket</option>
								<option value="37">Water Bucket</option>
								<option value="38">Lava Bucket</option>
								<option value="7">Cookie</option>
								<option value="10">Cake</option>
								<option value="39">Milk Bucket</option>
								<option value="4">Creeper</option>
								<option value="5">Pig</option>
								<option value="30">Spawn Egg</option>
								<option value="8">Heart</option>
								<option value="16">Cobweb</option>
								<option value="28">Potion</option>
								<option value="29">Splash Potion</option>
							</select>
						</li>
						<li>
							<input type="submit" name="submit" tabindex="4" value="Generate!" />
						</li>
					</ul>
				</form>
			</div>

		<?php } ?>

		<div id="footer">
			Powered by <a href="https://github.com/MarvinMenzerath/MinecraftAchievementGenerator" target="_blank">Minecraft Achievement Generator</a> v1.0.1 | © Minecraft &amp; Images <a href="http://mojang.com" target="_blank">Mojang</a>
		</div>
	</div>
</body>
</html>