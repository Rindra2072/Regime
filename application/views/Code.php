<table>
    <tr>
        <th>Code</th>
        <th>IdUser</th>
    </tr>
    <?php for($i=0;$i<count($validation);$i++) {?>
    <tr>
        <td><?php echo $validation[$i]->code ;?></td>
        <td><?php echo $validation[$i]->id_User ;?></td>
        <td><a
                href="<?php echo base_url('codeCI/valider?code='.$validation[$i]->code.'&&iduser='.$validation[$i]->id_User);?>">Accepter</a>
        </td>
    </tr>
    <?php }?>
</table>