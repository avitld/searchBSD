<?php require "misc/header.php"; ?>

	<body>
		<form class="search-container" action="search.php" method="get" autocomplete="off">
			<img src="img/logo_dark.webp" /><br/>
			<input type="text" name="q" autofocus required />
			<button type="submit">Search</button>
			<hr class="smhr"/>
			<div class="bsd-picker">
				<label style="color: red;">FreeBSD</label>
				<input type="radio" name="type" value="freebsd" required />
				<br/>
				<label style="color: yellow;">OpenBSD</label>
				<input type="radio" name="type" value="openbsd" required />
				<br/>
				<label style="color: orange;">NetBSD</label>
				<input type="radio" name="type" value="netbsd" required />
			</div>
		</form>

<?php require "misc/footer.php"; ?>
