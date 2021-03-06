@include('includes.header')

<body>
<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                @include('includes.alert')

                <div class="panel-body">
                    {{Form::open(['route'=>'registration.doComplete', 'method'=> 'post','role'=>'form'])}}
                    <fieldset>

                        <div class="form-group">
                            {{ Form::text('first_name', '', array('class' => 'form-control', 'placeholder' => 'First Name', 'autofocus')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('last_name', '', array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('mobile', '', array('class' => 'form-control', 'placeholder' => 'Mobile')) }}
                        </div>

                        <div class="form-group">
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                        </div>

                        <div class="form-group">
                            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                        </div>

                        <!-- Change this to a button or input when using this as a form -->
                        {{Form::submit('Register',['class'=> 'btn btn-lg btn-success btn-block'])}}
                    </fieldset>
                    {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
</div>
@include('includes.footer')


</body>

</html>
