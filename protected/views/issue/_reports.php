<?php foreach($reports as $report): ?>
<div class="report" id="c<?php echo $report->rp_id; ?>">

        <?php //echo CHtml::link("#{$report->rp_id}", $report->getUrl($issue), array(
                //'class'=>'cid',
                //'title'=>'Permalink to this comment',
        //)); ?>

        <div class="rp_user">
                <?php echo $report->us->us_fullname; ?> reported:
        </div>

        <div class="rp_date">
                <?php echo $report->rp_date; ?>
        </div>

        <div class="rp_report">
                <?php echo nl2br(CHtml::encode($report->rp_report)); ?>
        </div>

</div><!-- comment -->
<?php endforeach; ?>
