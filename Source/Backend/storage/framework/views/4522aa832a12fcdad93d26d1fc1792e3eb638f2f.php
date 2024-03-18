<?php echo $__env->make('layouts.documents.index', [
    'action' => route('projects.documents.store', $project),
    'documents' => $documents,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('control-panel.projects.show.layout', [
    'project' => $project,
    'activeProjectNav' => 'documents',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/projects/show/documents.blade.php ENDPATH**/ ?>
