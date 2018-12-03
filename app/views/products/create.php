<?php 
//  var_dump($products);die;
?>

        <div class="col-md-8 col-md-offset-2">
            
            <h3 class="text-center">Them moi san pham </h3>

            <form action="store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Ten san pham</label>
                    <input type="text" class="form-control" name="name" placeholder="Ten san pham...">
                </div>
                <div class="form-group">
                    <label for="">Gia nien yet</label>
                    <input type="number" class="form-control" name="list_price" placeholder="Ten san pham...">
                </div>
                <div class="form-group">
                    <label for="">Gia ban</label>
                    <input type="number" class="form-control" name="sell_price" placeholder="Ten san pham...">
                </div>
                <div class="form-group">
                    <label for="">Anh dai dien</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
					<label for="">Mo ta san pham</label>
					<textarea name="detail" class="form-control" cols="30" rows="5"></textarea>
				</div>
                <div class="form-group">
					<label for="">Danh muc </label>
					<select name="category_id" class="form-control">
                        <option value="">Chon Danh Muc</option>
                        <?php foreach ($categories as $key => $cate): ?>
                        <option value="<?= $cate->id; ?>"><?= $cate->name; ?></option>
                        <?php endforeach ?>
                    </select>
				</div>
                <div class="form-group">
					<input type="submit" class="btn btn-success" value="Them moi">
				</div>
            </form>
            
        </div>
