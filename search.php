<?php require "misc/header.php"; ?>
<?php require "misc/results.php"; ?>

<body>
    <?php
        $query = $_REQUEST["q"];
        $type = $_REQUEST["type"];

        /*$json_data = file_get_contents('misc/lists.json');
        $list = json_decode($json_data, true);
        $desired_list = [];
        foreach ($list as $slist) {
            if ($slist['type'] === $type) {
                $desired_list = $slist;
            }
        }
        */

        $final_results = get_results($query, $type);
    ?>
    <form class="mini-search-container" method="get" action="search.php">
        <a href="index.php"><img src="img/logo_dark.webp" width="4%"></a>
        <input type="text" name="q" autofocus required value="<?php echo $query?>" />
        <button type="submit">Search</button>
        <br/>
        <span style="color: white;">|</span>
        <label style="color: red;">FreeBSD</label>
		<input type="radio" name="type" value="freebsd" required/>
        <span style="color: transparent;">|</span>
		<label style="color: yellow;">OpenBSD</label>
		<input type="radio" name="type" value="openbsd" required />
        <span style="color: transparent;">|</span>
		<label style="color: orange;">NetBSD</label>
		<input type="radio" name="type" value="netbsd" required />
        <span style="color: white;">|</span>
    </form>
    <div class="search-content">
        <p class="explainer">You searched for: <b><?php echo $query; ?></b><br/>Showing results for <b><?php echo $type; ?></b></p>
        <div class="card" id="wiki">
            <h3>Got Results:</h3>
            <div class="results">
                <?php
                    echo_response($final_results, $type)
                ?>
            </div>
        </div>
        <br/>
    </div>

<?php require "misc/footer.php"; ?>
