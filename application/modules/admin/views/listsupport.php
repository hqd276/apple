<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">List support</h2>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Id</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Content</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php foreach($list as $item) {?>
			<tr>
				<td><?php echo $item->id?></td>
				<td><?php echo $item->email?></td>
				<td><?php echo $item->phone?></td>
				<td><?php echo $item->content?></td>
				<td>
					<a href="#" onclick="confirmClick('<?php echo base_url('/admin/support/delete/'.$item->id)?>')"  class="btn btn-default"> Delete </a>
				</td>
			</tr>
			
		<?php }?>
		</tbody>
	</table>
	<nav>
	  <ul class="pager">
	    <li class="previous <?php if(!$older_link) echo 'disabled'?>"><a href="<?php echo $older_link?>"><span aria-hidden="true">&larr;</span> Older</a></li>
	    <li class="next <?php if(!$newer_link) echo 'disabled'?>"><a href="<?php echo $newer_link?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
	  </ul>
	</nav>
</div>
		