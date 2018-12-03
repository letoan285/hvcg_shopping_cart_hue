<?php 
//  var_dump($products);die;
?>

<div class="col-md-12">
    <a class="btn btn-success" href="products/create">Them moi</a>
    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Anh san pham</th>
                <th>Ten san pham</th>
                <th>Danh muc</th>
                <th>Lua chon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?= $key+1; ?></td>
                <td>
                    <a href=""><img src="<?= $product->image; ?>" alt=""></a>
                </td>
                <td><?= $product->name; ?></td>
                <td><?= $product->category_id; ?></td>
                <td>
                    <a class="btn btn-sm btn-info" href=""><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-sm btn-danger" href=""><span class="fa fa-times"></span></a>
                </td>
            </tr>
            <?php endforeach ?>
        
        </tbody>
    </table>
</div>
