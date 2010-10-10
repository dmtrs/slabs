<?php foreach($reports as $report): ?>
<div class="report" id="c<?php echo $report->rp_id; ?>">
	<?php $this->renderPartial('/report/_view', array('data'=>$report)); ?>
</div><!-- comment -->
<?php endforeach; ?>
