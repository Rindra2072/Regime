<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Listes des activites</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>Name</th>
                                <th>Description</th>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($activities);$i++) {?>
                                <tr>
                                    <td><?php echo $activities[$i]->name_Activity?></td>
                                    <td><?php echo $activities[$i]->description?></td>
                                    <td><a href="<?php echo base_url('ActivityCI/delete_Act')?>?id=<?php echo $activities[$i]->id_Activity ?>">Supprimer</a></td>
                                    <td><a href="<?php echo base_url('ActivityCI/updateView')?>?id=<?php echo $activities[$i]->id_Activity ?>"> Modifier</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <nav class="pull-left">
                    <a href="<?php echo base_url('ActivityCI/insertView')?>">Ajouter une activité</a>
                </nav>
            </div>
        </div>
    </div>
</div>
