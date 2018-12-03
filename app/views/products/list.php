<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên Sản phẩm</th>
			<th>Mô tả</th>
			<th>Danh mục</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $p): ?>
			<tr>
			    <td><?= $p->id?></td>
			    <td>
			    	<a href="" title="">
			    		<?= $p->tit?>
			    	</a>
			    </td>
			    <td><?= $p->short_desc?></td>
			    <td><?= $p->category_name?></td>
		    </tr>
		<?php endforeach ?>
		
	</tbody>
</table>