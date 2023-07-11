<br>
<div class="container my-auto">
    <div class="row">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card-body">
                    <h6>Edit Regime
                    </h6>
                    <table class="table">
                        <tr>
                            <th>Regime</th>
                            <td><?php echo $suggest['regime'];?></td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td><?php echo $suggest['duree'];?> days</td>
                        </tr>
                        <tr>
                            <th>Prix</th>
                            <td><?php echo $suggest['price'];?> ar</td>
                        </tr>
                        <?php for($i=0;$i<count($activity);$i++) {?>
                        <tr>
                            <th>Activity</th>
                            <td><?php echo $activity[$i]['name_Activity'];?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <button class="btn btn-outline-success"> <a
                            href="<?php echo base_url('targets/acceptSuggest?idRegime='.$suggest['id'].'&&cible='.$poidsCible.'&&duration='.$suggest['duree'].'&&price='.$suggest['price']);?>">Accepter</a>
                    </button>
                    <button class="btn btn-outline-primary"> <a
                            href="<?php echo base_url('ActivityCI/index');?>">Refuser</a> </button>
                </div>
            </div>
        </div>
    </div>
</div>