<body>
<section class="intro">
    <div class="column">
        <h3> <?php
            echo $data[0]['firstname'];
            echo (" ");
            echo $data[0]['lastname'];
        ?></h3>
        <img src=" <?echo $data[0]['image']; ?>"
             style="width: 183px;">
    </div>
    <div class="column">

        <p>
            Née le : <?php echo $data[0]['birthname']; ?>
        </p>
        <p>
            <?php echo $data[0]['biography']; ?>
        </p>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<p></p>
</body>