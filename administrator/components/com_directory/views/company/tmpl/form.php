<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_directory/css/form.css" />

<form action="<?= @route('id='.$company->id)?>" method="post" class="-koowa-form">
	<div style="width: 50%" id="mainform">
		<div id="title-header" class="border-radius-4 title clearfix">
			<input id="title" type="text" class="title minLength:5" name="title" placeholder="Title" value="<?= $company->title ?>" />
		</div>
		
		<div><?= @editor(array('height' => '300', )) ?></div>
		
	</div>
</form>