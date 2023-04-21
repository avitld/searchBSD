<?php require "misc/header.php"; ?>

	<body>
		<form class="search-container" action="search.php" method="get" autocomplete="off">
			<img src="img/logo_dark.webp" /><br/>
			<input type="text" name="q" autofocus />
			<input type="hidden" name="s" value="0" />
			// BSD Types
			<input type="hidden" name="f" value="0" />
			<input type="hidden" name="o" value="0" />
			<input type="hidden" name="n" value="0" />
			<button name="s" value="0" type="submit">Search</button>
			<div class="bsd-picker">
				<input type="radio" name="f" value="0" />
			</div>
		</form>
	</body>

<?php require "misc/footer.php"; ?>
