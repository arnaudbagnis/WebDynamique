<header>
    <div >
        <div>
            <h1> <?php
                echo $data[0]["title"];
                ?> </h1>
            <p>(<?php
                echo $data[0]["releaseDate"];
                ?>)</p>
            <nav >
                <div >
                    <ul>
                        <li ><a href="home">Home</a></li>
                        <li><a href="actor">Acteur</a></li>
                        <li class="active"><a href="director">Directeur</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>