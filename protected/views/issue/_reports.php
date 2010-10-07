<?php foreach($reports as $report): ?>
<div class="comment" id="c<?php echo $report->rp_id; ?>">

        <?php //echo CHtml::link("#{$report->rp_id}", $report->getUrl($issue), array(
                //'class'=>'cid',
                //'title'=>'Permalink to this comment',
        //)); ?>

        <div class="author">
                <?php echo $report->us->us_fullname; ?> reported:
        </div>

        <div class="time">
                <?php echo $report->rp_date; ?>
        </div>

        <div class="content">
                <?php echo nl2br(CHtml::encode($report->rp_report)); ?>
        </div>

</div><!-- comment -->
<?php endforeach; ?>
