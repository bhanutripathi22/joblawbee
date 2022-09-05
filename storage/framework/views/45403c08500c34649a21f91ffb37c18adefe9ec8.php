




<?php $__env->startSection('content'); ?>
<tr>
    <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td bgcolor="#ffffff">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                        <td bgcolor="#ffffff" align="left" style="font-size: 14px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                            <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                Greetings!!
                            </p>
                            <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                You have received new application(s).
                            </p>
                            <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                <a href="<?php echo e(route('company.dashboard')); ?>">GO TO DASHBOARD</a>
                            </p>
                        </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td align='left' bgcolor='#ffffff'>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <th align="left">Name Of the candidate</th>
                            <td align="left"><?php echo e($job->first_name); ?> <?php echo e($job->last_name); ?></td>
                        </tr>
                        <tr>
                            <th align="left">Location</th>
                            <td align="left"><?php echo e($job->location); ?></td>
                        </tr>
                        <tr>
                            <th align="left">Practice Area</th>
                            <td align="left"><?php echo e($job->practiceArea->name); ?></td>
                        </tr>
                        <tr>
                            <th align="left">Total Experience</th>
                            <td align="left"><?php echo e($job->minimum_experience . ' to ' . $job->maximum_experience); ?></td>
                        </tr>
                        <tr>
                            <th align="left"></th>
                            <td align="left"><a href="<?php echo e(asset('storage/'.$job->resume)); ?>">View Application</a></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td bgcolor="#ffffff">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="font-size: 14px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Many Thanks
                                </p>
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Jobs Lawbee
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('emails.layouts.mail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/emails/job/companyemail.blade.php ENDPATH**/ ?>