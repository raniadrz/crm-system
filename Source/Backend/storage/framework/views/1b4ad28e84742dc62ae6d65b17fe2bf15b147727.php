<?php echo $__env->make('layouts.documents.index', [
    'action' => route('clients.documents.store', $client),
    'documents' => $documents,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('control-panel.clients.show.layout', [
    'client' => $client,
    'activeClientNav' => 'documents',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/clients/show/documents.blade.php ENDPATH**/ ?>