@if (session('success'))
    <div class="alert text-white bg-primary" role="alert">
        <div class="iq-alert-text">{{ session('success') }}</div>
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@elseif(session('error'))
    <div class="alert text-white bg-danger" role="alert">
        <div class="iq-alert-text">{{ session('error') }}</div>

        <button type="button" class="close" data-dismiss="alert">×</button>
     </div>

@elseif(session('info'))
    <div class="alert text-white bg-info" role="alert">
        <div class="iq-alert-text">{{ session('info') }}</div>

        <button type="button" class="close" data-dismiss="alert">×</button>
     </div>
@endif
