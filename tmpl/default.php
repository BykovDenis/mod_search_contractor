<?php

defined('_JEXEC') or die('Restricted access'); ?>

<form name="form-seach">
Поиск аптек на сайте
<div id="form-login-submit" class="control-group">
	<div class="controls">
        <!--input id="contractor_name" type="text" name="contractor_name" class="input-medium" tabindex="0" size="40"  /-->  
		<input type="text" id="mod-finder-searchword" name="contractor_name" class="search-query input-medium" size="30" value="" />		
        <button type="submit" tabindex="0" name="Submit" class="btn btn-primary">Найти</button>
    </div>
</div>

<?php if(!empty($contractor)): ?>
	<ul>
	<?php foreach($contractor as $item): 
            if(isset($item->name)):?>
		<li><a href="index.php?option=com_drugstories&contractor_id=<?=$item->contractor_id; ?>" ><?=$item->name; ?></a></li>
	<?php 
            endif;
        endforeach; ?>
	</ul>
<?php endif;  ?>

</form>

<?php 