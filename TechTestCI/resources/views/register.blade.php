



<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script>
            function register(){
                name = $("#name").val();
                email = $("#email").val();
                password = $("#password").val();
                if($("#password").val()!=$("#passwordrep").val()){
                    alert("Las contraseñas deben ser iguales")
                } else {
                    $.ajax({
                    url: "{{ route('signUp') }}",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        password: password
                    },
                    success: function(data) {
                        console.log(data);
                    }
                    });
                    alert("Usuario registrado exitosamente")
                }
                
            }
        </script>
        @csrf
        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <img src="/img/logo.jpg" class="rounded mx-auto d-block" style="max-width:600px;width:50%" alt="logo">
                <div class="container-sm border">

                    <br>
                    <h2>Crear cuenta</h2>
                    <br>
                    <form action="javascript:void(0)" id="frm-register" method="post">

                        <div class="mb-3">
                            <label for="name" class="form-label font-weight-bold">Tu nombre</label>
                            <input class="form-control" type="text" id="name" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input class="form-control" type="text" id="email" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input class="form-control" type="password" id="password" placeholder="Debe contener al menos 6 caracteres" value="{{$user->password}}">
                            <img src="https://icongr.am/entypo/info.svg?size=14&color=0dc5e6"/> La contraseña debe contener al menos 6 caracteres.
                        </div>
                        <div class="mb-3">
                            <label for="passwordrep" class="form-label">Vuelve a escribir la contraseña</label>
                            <input class="form-control" type="password" id="passwordrep" value="{{$user->passwordrep}}">
                        </div>
                        <div class="d-grid gap-2">
                            <button id="registerBtn" onclick="register()" class=" mb-3 btn btn-warning">Crea tu cuenta de Amazon</button>
                        </div>
                        <p>
                            Al crear una cuenta, aceptas las <a href="/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&amp;nodeId=508088" style="text-decoration:none">Condiciones de Uso</a> y el <a href="/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&amp;nodeId=468496" style="text-decoration:none">Aviso de Privacidad</a> de amazon.com.
                        </p>
                    </form>
                    <hr class="hr" />

                    <p>
                        ¿Ya tienes una cuenta? <a href="#" style="text-decoration:none"> Iniciar sesión &#8227;</a>
                    </p>

                </div>
            </div>
            <div class="col">
            </div>
        </div>
        

        


    </body>

</html>
@section('script')
<script>


$("#frm-register").validate({

submitHandler: function() {
    
    
}
});

</script>

@endsection

