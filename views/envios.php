<section class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 p-5">
            <div class="mb-3">
            <form method=POST action="index.php?seccion=procesar" enctype="multipart/form-data">
            
                <label for="nombre" class="form-label">Nombre y Apellido</label>
                <input type="text" class="form-control" id="nombre" name="Nombre y apellido" placeholder="Nombre y Apellido">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@email.com">

                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="Direccion" name="direccion" placeholder="Av. Siempre viva">

                <label for="numero" class="form-label">Numero de calle</label>
                <input type="number" class="form-control" id="numero" name="numero" placeholder="742">

                    <!-- <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="3">Hola Quiero unas zapatillas facheras!</textarea> -->

                    
                    <div class="col-auto mt-2">
                        <button type="submit" onclick="alerta()" class="btn btn-primary mb-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-sm-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.992669539749!2d-58.39857512351976!3d-34.60434687295418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sDa%20Vinci%20%7C%20Primera%20Escuela%20de%20Arte%20Multimedial!5e0!3m2!1ses-419!2sar!4v1713917892801!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>