<body>
    <div class="container mt-5">
        <h1> Example </h1>
        <h2> PHP Select Dropdown Example </h2>
        <form action="" method="post">
            <select name="Movies">
                <option value="" selected> Select option </option>
                <option value="harry_potter"> Harry Potter </option>
                <option value="bonnie_clyde"> Bonnie and Clyde </option>
                <option value="reservoir_dogs"> Reservoir Dogs </option>
                <option value="don"> Don </option>
                <option value=?anaconda"> Anaconda </option>
            </select>
            <div class="selectIcon">
                <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                    <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z">
                    </path>
                </svg>
            </div>
            <br> <br> <input type="submit" name="submit" value="Select Movie">
        </form>
    </div>
</body>  
        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['Movies'])) {
                $selected = $_POST['Movies'];
                echo 'You have chosen: ' . $selected;
            } else {
                echo 'Please select the value.';
            }
        }
        ?>