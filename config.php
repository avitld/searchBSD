<?php require "misc/header.php"; ?>

<body>
    <div class="settings">
        <h2>SearchBSD Configuration</h2>
        <hr class="smhr" />
        <form action="config.php" method="post">
            <p style="color: red">Warning: Nothing works as of now</p>
            <label>Max Width of cards (in px)</label>
            <input type="number" min="500" max="900" value="500" />
            <br/><br/>
            <button type="submit" name="submit">Save Changes</button>
            <button type="submit" name="reset">Reset Changes</button>
            <br/><br/>
            <a href="index.php" style="color: white; text-decoration: none;">Go Home</a>
        </form>
    </div>

<?php require "misc/footer.php"; ?>
