<br>
<div class="container my-auto">
    <div class="row">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card-body">
                    <h3>Mon regime
                    </h3>
                    <table class="table">
                        <tr>
                            <th>Regime</th>
                            <td><?php echo $name_regime->regime;?></td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td><?php echo $regime->duration;?> days</td>
                        </tr>
                        <tr>
                            <th>Prix</th>
                            <td><?php echo $regime->price;?> ar</td>
                        </tr>
                        <?php for($i=0;$i<count($activity);$i++) {?>
                        <tr>
                            <th>Activity</th>
                            <td><?php echo $activity[$i]['name_Activity'];?></td>
                        </tr>
                        <?php } ?>
                        <table class="table">
                            <h5>Quantite d'aliments</h5>
                            <tr>
                                <th>Viande</th>
                                <td><?php echo $detail_regime->viande;?> %</td>
                            </tr>
                            <tr>
                                <th>Volaille</th>
                                <td><?php echo $detail_regime->volaille;?> %</td>
                            </tr>
                            <tr>
                                <th>Poisson</th>
                                <td><?php echo $detail_regime->poisson;?> %</td>
                            </tr>
                        </table>
                        <button class="btn btn-outline-success"> <a
                                href="<?php echo base_url('PdfController/Exporter');?>">Exporter</a>
                        </button>
                        <br>
                </div>
                <br>

            </div>
            <br>
        </div>
    </div>
</div>