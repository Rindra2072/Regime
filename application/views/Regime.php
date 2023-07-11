<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Listes des Regimes</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>Regime</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Objective</th>
                                <th>Weight</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($regimes);$i++) {?>
                                <tr>
                                    <td><?php echo $regimes[$i]->regime?></td>
                                    <td><?php echo $regimes[$i]->id_picture?></td>
                                    <td><?php echo $regimes[$i]->description?></td>
                                    <td><?php echo $regimes[$i]->id_Objective?></td>
                                    <td><?php echo $regimes[$i]->weight?></td>
                                    <td><?php echo $regimes[$i]->price?></td>
                                    <td><a href="<?php echo base_url('RegimeCI/delete_Reg')?>?id=<?php echo $regimes[$i]->id ?>">Supprimer</a></td>
                                    <td><a href="<?php echo base_url('RegimeCI/updateView')?>?id=<?php echo $regimes[$i]->id ?>"> Modifier</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <nav class="pull-left">
                    <a href="<?php echo base_url('RegimeCI/insertView')?>">Ajouter une regime</a>
                </nav>
            </div>
        </div>
    </div>
</div>
