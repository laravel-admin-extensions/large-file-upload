<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}" >

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>
    <div class="col-sm-6">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('admin::form.error')

        <div class="controls" id="aetherupload-wrapper-{{$name}}">
            <input type="file" id="{{$name}}-file" data-filename-placement="inside" class="file-inputs"/>
            <div class="progress " style="height: 10px;margin-bottom: 2px;margin-top: 10px;width: 200px;">
                <div id="{{$name}}-progressbar" style="background:blue;height:6px;width:0;"></div>
            </div>
            <span style="font-size:12px;color:#aaa;" id="{{$name}}-output"></span>
            <input type="hidden" name="{{$name}}" id="{{$name}}-savedpath" value="{{ old($column, $value) }}">
        </div>
        @include('admin::form.help-block')
    </div>
</div>