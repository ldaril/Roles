{!! BootForm::hidden('id') !!}

@component('core::admin._buttons-form', ['model' => $model])
@endcomponent

<div class="row">

    <div class="col-sm-6">
        {!! BootForm::text(__('Name'), 'name')->required() !!}
    </div>

</div>

<label>@lang('roles::global.Role permissions')</label>
@include('core::admin._permissions-form')
