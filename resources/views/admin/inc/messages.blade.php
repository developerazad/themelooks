<div class="col-md-12">
    @if(session('success'))
        <div class="alert alert-info" style="background-color: #ffffff!important;border-color: #c4cad4!important;color: #0b93d5!important;padding: 10px!important;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-info" style="background-color:#ffffff!important;border-color: #c4cad4!important;color: #ff0000!important;padding: 10px!important;">
            {{ session('error') }}
        </div>
    @endif
</div>