<?php echo $erreur;?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <form action="<?php echo base_url('codeCI/depot');?>" method="post">
            <input type="text" name="code" required />
            <button type="submit">Deposer</button>
        </form>

        <table>
            <tr>
                <th>Code</th>
                <th>Prix</th>
            </tr>
            <?php for($i=0;$i<count($code);$i++){?>
            <tr>
                <td><?php echo $code[$i]->code?></td>
                <td><?php echo $code[$i]->price?></td>
            </tr>
            <?php }?>
        </table>
    </div>    
</div>