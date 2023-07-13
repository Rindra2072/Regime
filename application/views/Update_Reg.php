<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <form action="<?php echo base_url('RegimeCI/update'); ?>" method="post">
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Regime</label>
                <input type="text" name="regime" value="<?php echo $reg->regime;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">

                <input type="hidden" name="id_picture" value="<?php echo $reg->id_picture;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Description</label>
                <input type="textarea" name="description" value="<?php echo $reg->description;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label">objective</label><?php
				 if($reg->id_Objective==1){
					$val = 2;
					$d = "Diminue le poids";
					$a = "augmente le poids";
				 } 
				 else {
						$val = 1;
					$d ="augmente le poids";
					$a = "Diminue le poids";
				 }
				 ?>
                <select name="id_Objective" id="" class="form-control">
                    <option value="<?php echo $reg->id_Objective?>"><?php echo $a;?></option>
                    <option value="<?php echo $val?>"><?php echo $d;?></option>
                </select>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Weight</label>
                <input type="number" name="weight" value="<?php echo $reg->weight;?>" class="form-control">
                <input type="hidden" name="id" value="<?php echo $reg->id;?>">
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" value="<?php echo $reg->price;?>" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn">Validez</button>
            </div>
        </form>
    </div>
</div>