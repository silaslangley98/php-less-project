<footer class="clear pad">

    <div class = "layout">
        <p>A test site for LESS and PHP by Silas Langley</p>
        <p>
            <?php
                date_default_timezone_set('America/Los_Angeles');
                echo date("l jS \of F Y h:i:s A");
            ?>
        </p>
    </div>

</footer>