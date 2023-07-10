<table>
    <tr>
        <th>Regime</th>
        <th>Duree</th>
        <th>Prix</th>
    </tr>


    <tr>
        <td><?php echo $suggest['regime'];?></td>
        <td><?php echo $suggest['duree'];?></td>
        <td><?php echo $suggest['price'];?></td>
    </tr>



</table>

<table>
    <tr>
        <th>Activite</th>
    </tr>


    <?php for($i=0;$i<count($activity);$i++) {?>
    <tr>
        <td><?php echo $activity[$i]['name_Activity'];?></td>

    </tr>
    <?php } ?>


</table>
<button> <a
        href="<?php echo base_url('targets/acceptSuggest?idRegime='.$suggest['id'].'&&cible='.$poidsCible.'&&duration='.$suggest['duree'].'&&price='.$suggest['price']);?>">Accepter</a>
</button>
<button> <a href="#">Refuser</a> </button>