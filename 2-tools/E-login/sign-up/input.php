<!DOCTYPE html>
<html>

<body style="text-align: center;">
	<h2>GeeksForGeeks</h2>

	<h2>
		Change input
		borders after filling data
	</h2>

	<form>
		<label> NAME</label>
		<input type="text" id="fname"
				name="fname" value="">
		<input type="submit" value="submit">
	</form>

	<script>
		var gfg = document.getElementById("fname");
		
		gfg.onchange = function (e) {
			if (gfg.value == '' || gfg.value == '0' ) {
				e.target.style.borderBottom
						= "4px dotted red";
			}
		};
	</script>
</body>

</html>
