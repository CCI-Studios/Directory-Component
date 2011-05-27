<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip') ?>
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num') ?></th>
				<th width="10">&nbsp;</th>
				
				<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
				<th width="5"><?= @text('id')?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total' => $total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($companies as $company): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $company)) ?></td>
				<td><a href="<?= @route('view=company&id='.$company->id) ?>">
					<?= @escape($company->title) ?>
				</a></td>
				<td><?= $company->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($companies)): ?>
			<tr>
				<td colspan="99">
					<?= @text('No companies currently listed.')?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
			
		
	</table>
</form>