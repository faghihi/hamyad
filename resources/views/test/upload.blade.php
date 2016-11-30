
<div class="about-section">
    <div class="text-content">
        <div class="span7 offset1">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{!! Session::get('success') !!}</h2>
                </div>
            @endif
            <div class="secure">Upload form</div>
            {!! Form::open(array('url'=>'api/v1/UsersUploadPhoto','method'=>'POST', 'files'=>true)) !!}
            <div class="control-group">
                <input type="hidden" name="api_token" value="Kpg8Wbu3Ovn2BvIQuYHtXsjwabh8r9kfMOSF3lZeSxzp3f4lSOiJrT1VYrYN">
                <div class="controls">
                    {!! Form::file('image') !!}
                    <p class="errors">{!!$errors->first('image')!!}</p>
                    @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                    @endif
                </div>
            </div>
            <div id="success"> </div>
            {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>