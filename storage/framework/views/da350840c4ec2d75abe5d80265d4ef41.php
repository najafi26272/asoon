<table>
        <thead>
        <tr>
            <th> 
                تاریخ                    
            </th>
            <th>
                روز
            </th>
            <th>
                ساعت
            </th>
            <th>
                شرح فعالیت
            </th>         
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $groupedItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $groupedItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e(Verta::instance($date)->format('Y-m-d')); ?>

                        </td>
                        <td>
                            <?php echo e(Verta::instance($date)->formatWord('l')); ?>

                        </td>
                        <td>
                            <?php echo e(intdiv($groupedItem->sum('time'), 60).':'. ($groupedItem->sum('time') % 60)); ?>

                        </td>
                        <?php $tasks=''; ?>
                        <?php $__currentLoopData = $groupedItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $tasks .= $item->task .' _ ' ?>                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e(substr($tasks, 0, -2)); ?></td>
                    </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
 <?php /**PATH /home/asougrou/core/resources/views/exports/report.blade.php ENDPATH**/ ?>