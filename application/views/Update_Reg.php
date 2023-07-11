<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <form action="<?php echo base_url('Regime_Controller/update'); ?>" method="post">
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Regime</label>
                <input type="text" name="regime" value="<?php echo $reg->regime;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Picture</label>
                <input type="number" name="id_picture" value="<?php echo $reg->id_picture;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Description</label>
                <input type="textarea" name="description" value="<?php echo $reg->description;?>" class="form-control">
            </div>
            <div class="input-group input-group-outline mb-3">
                <label class="form-label">objective</label>
                <input type="number" name="id_Objective" value="<?php echo $reg->id_Objective;?>" class="form-control">
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
