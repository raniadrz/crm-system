<?php echo $__env->make('layouts.documents.index', [
    'action' => route('tasks.documents.store', $task),
    'documents' => $documents,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('control-panel.tasks.show.layout', [
    'task' => $task,
    'activeTaskNav' => 'documents',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/tasks/show/documents.blade.php ENDPATH**/ ?>