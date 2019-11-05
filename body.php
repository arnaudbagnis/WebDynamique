<body>

<p>
<div> <? echo '<img src="https://media.senscritique.com/media/000016982986/150_200/Masaki_Kobayashi.jpg">'; ?> </div>
</p>
<p>
    Bio : <div><?php print_r($data["bio"]); ?>
</div>
</p>
<p>
    Nom : <div> <? print_r($data["nom"]); ?> </div>
</p>
<p>
    Prénom : <div> <?php print_r($data["prenom"]); ?> </div>
</p>
<p>
    date de naissance : <div> <?php print_r($data["date"]); ?></div>
</p>
<p>
    filmographie : <div>
    <ul>
        <li> <?php print_r($data["filmo"]); ?></li>
    </ul>
</div>
</p>




</body>