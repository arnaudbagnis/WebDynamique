<header>
    <div >
        <div>
            <h1> <?php
                print_r($data["title"]);
                ?> </h1>
            <p><?php
                print_r($data["date"]);
                ?></p>
            <nav >
                <div >
                    <ul>
                        <li ><a href="index.html">Home</a></li>
                        <li><a href="actor.php">Acteur</a></li>
                        <li class="active"><a href="director.php">Directeur</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>