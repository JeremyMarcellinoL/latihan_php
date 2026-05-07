<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <body>
        <div class="w3-card-4" style="width:40%">
            <header class="w3-container w3-light-grey">
            <h3><b>User Information</b></h3>
            </header>
            <div class="w3-container"><br/>
                <img src="https://www.w3schools.com/W3CSS/img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <p><b>Name  : </b> <?php echo $_POST["name"]; ?></p>
                <p><b>Major : </b> <?php echo $_POST["study_program"]; ?></p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">Verify</button>
        </div>
    </body>
</html>