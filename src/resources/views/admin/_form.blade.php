{!! BootForm::hidden('id') !!}

@include('core::admin._buttons-form')

<div class="row">

    <div class="col-sm-6">
        {!! BootForm::text(__('Name'), 'name') !!}
    </div>

</div>

<label>@lang('roles::global.Role permissions')</label>
@include('core::admin._permissions-form')
