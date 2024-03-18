<?php $__env->startSection('content'); ?>
    <h3 style = "text-align: left;">Welcome, <?php echo e(Auth::user()->name); ?>!</h3>
    <br>
    <h4>Dashboard</h4>
    <div class="card-group">
        <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo e($count); ?></h4>
                    <p class="card-text"><small class="text-muted"><?php echo e($entity); ?></small></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <br>



    <h5 >Pie Chart</h5>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- First pie chart -->
    <div class="card" style="max-width: 300px; max-height: 300px;">
        <canvas id="myPieChart1" width="200" height="200"></canvas>
    </div>

    <script>
        // Get the statistics for the first pie chart
        var statistics2 = <?php echo json_encode($statistics2, 15, 512) ?>;
        var labels2 = Object.keys(statistics2);
        var data2 = Object.values(statistics2);

        // Create the first pie chart
        var ctx1 = document.getElementById('myPieChart1').getContext('2d');
        var myPieChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: labels2,
                datasets: [{
                    data: data2,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false // Disable default aspect ratio
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.control-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/dashboard/index.blade.php ENDPATH**/ ?>
