

        /*esta funcion define el objeto contacto con sus propiedades*/
        function contacto() {
            this.nombre = "";
            this.apellido = "";
            this.telefono = "";
            this.correo = "";
        }

        //variable para almacenar cada una de las instancias de contacto
        var contactos = new Array();


        /*funcion para no hacer referencia todo el tiempo a document.get*/
        function sendo(id) {
            return document.getElementById(id);
        }
        
        /*funcion que manda a llamar a la funcion sendo para agregar un contacto
        y nos muestre los campos que se tienen que llenar*/
        function agregar() {
            sendo("formulario").style.display='inline';
            sendo('txtNombre').focus();
        }

        /*esta funcion oculta el formulario*/
        function ocultar() {
            sendo('txtNombre').value = '';
            sendo('txtApellido').value = '';
            sendo('txtTelefono').value = '';
            sendo('txtCorreo').value = '';
            
            sendo("formulario").style.display='none';
        }

        //registra el nuevo contacto
        function guardar() {

            con = new contacto();

            con.nombre = sendo('txtNombre').value;
            con.apellido = sendo('txtApellido').value;
            con.telefono = sendo('txtTelefono').value;
            con.correo = sendo('txtCorreo').value;

            contactos[contactos.length] = con;
            ocultar();
            mostrar();
            
        }

        function confirmar(id_contacto) {
            if(confirm("Estas seguro de que quieres eliminar este contacto")) {
                borrar(id_contacto);
            }
        }

        //borrar los contactos
        function borrar(id_contacto) {
                nuevo = new Array();
                for(i=0; i<contactos.length; i++) {
                    if(i != id_contacto) {
                        nuevo[nuevo.length] = contactos[i];
                    }
                }
                contactos = nuevo;
                mostrar();    
        }

        function editar(id_contacto) {
            con = contactos[id_contacto];
            borrar(id_contacto);
            agregar();
            sendo('txtNombre').value = con.nombre;
            sendo('txtApellido').value = con.apellido;
            sendo('txtTelefono').value = con.telefono;
            sendo('txtCorreo').value = con.correo;
        }

        function mostrar() {
            sendo('todos').innerHTML = '';
            for(i=0; i<contactos.length; i++) {
                con = contactos[i];
                div = document.createElement('div');
                div.setAttribute('class','contacto');
                div.innerHTML = 
                "<br>Nombre: "+con.nombre+" "+
                "Apellido: "+con.apellido+" "+
                "Telefono: "+con.telefono+" "+
                "Correo: "+con.correo+" "+" "+" "+" "+" "+
                "<button onclick='editar("+i+")'>Editar</button> <button onclick='confirmar("+i+")'>Eliminar</button>";
                sendo('todos').appendChild(div);
            }
        }

  