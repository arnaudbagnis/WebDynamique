<body>
hello
<p>
    <div>
        <? echo '<img src="https://media.senscritique.com/media/000016982986/150_200/Masaki_Kobayashi.jpg">'; ?>
    </div>
</p>
<p>
    Bio : <div>
            <?php echo $data[0]["biography"]; ?>
    </div>
</p>
<p>
    Nom : <div>
    <? echo $data[0]["lastname"]; ?>
    </div>
</p>
<p>
    Prénom : <div>
    <?php echo $data[0]["firstname"]; ?>
    </div>
</p>
<p>
    date de naissance : <div>
    <?php echo $data[0]["birthname"] ?>
    </div>
</p>

</body>