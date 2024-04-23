<?php

/*Creo la clase zapatilla para luego crear instancias en la vista productos mediante un foreach*/
class Zapatilla{
    #Se crean los atributos de cada objeto siguiendo el pilar de ENCAPSULAMIENTO (proteger la información de manipulaciones no autorizadas) mediante un modificador de acceso protected en el que solo pueden acceder a los atributos los métodos de la propia clase y los métodos de los hijos de esa clase. En este caso se accede mediante getters.
    protected $id;
    protected $modelo;
    protected $marca;
    protected $precio;
    protected $material;
    protected $estilo;
    protected $descripcion;
    protected $imagen;

    #Creo un método para obtener la información de los productos 
    public function catalogoCompleto(){
        #Creo el array catálogo 
        $catalogo = [];
        #Creo una variable que lee el contenido de un archivo, en este caso el json y lo devuelve como una cadena de texto.
        $productosString = file_get_contents('includes/productos.json');
        #Decodifica una cadena JSON y la convierte en una estructura de datos de PHP.
        $productosArray = json_decode($productosString); # Al no tener el true como segundo parametro, en vez de devolver un array, devuelve un objeto de la clase StdClass
        #Creo el foreach que va a recorrer el objeto de la clase StdClass
        foreach ($productosArray as $value) {
            # Creo una instancia de la class Zapatilla para cada producto-> Ahora tengo un objeto Zapatilla. Cada vez que recorra el ciclo se va a crear una instancia
            $zapatilla = new Zapatilla(); #Se puede usar self, new self()

            #Se le asigna a cada producto el valor correspondiente, en vez de usar ["id"] por ejemplo se usa $zapatilla->id y se lo iguala a la variable que recorre en este caso value->
            $zapatilla->id = $value->id;
            $zapatilla->modelo = $value->modelo;
            $zapatilla->marca = $value->marca;
            $zapatilla->precio = $value->precio;
            $zapatilla->material = $value->material;
            $zapatilla->estilo = $value->estilo;
            $zapatilla->descripcion = $value->descripcion;
            $zapatilla->imagen = $value->imagen;

            #Se agrega cada instancia de Zapatilla al array catálogo
            $catalogo []= $zapatilla;
        }
        #El método retorna el array catálogo
        return $catalogo;
}

    #Creo el método que nos va a ayudar a filtrar por ID al tocar el botón de cada producto. Recibe como parámetro el id de cada uno
    public function catalogoPorId($id){
        #Creo la variable $zapatillas que con un $this (porque se encuentra en la misma clase el método) accede al método catalogoCompleto, por el que obtiene el array de todos los productos
        $zapatillas = $this->catalogoCompleto();
        
        //Recorro con un foreach el array con la variable producto
        foreach ($zapatillas as $producto) {
            #En caso de que el id obtenido del objeto sea igual al recibido en el parámetro se retorna el producto 
            if($producto->id == $id){
                return $producto;
            }
        }
        //Retorno un array vacío
        return[];
    }

    #Creo el método que nos va a ayudar a filtrar según el estilo de cada producto. Recibe como parámetro el estilo de cada uno
    public function catalogoPorEstilo($estilo){
        $zapatillas = $this->catalogoCompleto();

        #Creo el array estilos vacío
        $estilos = [];
        #Recorro con un foreach el array con la variable producto
        foreach($zapatillas as $producto){
            #Si el estilo del objeto es igual al obtenido por el parámetro se pushea el producto al array creado anteriormente
            if($producto->estilo == $estilo){
                $estilos []= $producto;
            }
        }
        #Devuelve el array estilos
        return $estilos;
    }

    #Similar al método anterior pero en vez de usar estilo utiliza marca
    public function catalogoPorMarca($marca){
        $zapatillas = $this->catalogoCompleto();

        $marcas = [];
        foreach($zapatillas as $producto){
            if($producto->marca == $marca){
                $marcas []= $producto;
            }
        }
        return $marcas;
    }

    #Creo un método para poner la primera letra de la marca en mayúscula. Recibe como parámetro la marca
    public function marcaMayuscula($marca){
        #Creo la vriable $marcaConMayuscula y con la funcion ucfirst le indico que ponga la primer letra de la marca obtenida por el parámetro este en mayúscula
        $marcaConMayuscula = ucfirst($marca);
        #Retorno la variable
        return $marcaConMayuscula;
    }

    #Similar al método anterior pero en vez de usar marca utiliza estilo
    public function estiloMayuscula($estilo){
        $estiloConMayuscula = ucfirst($estilo);
        return $estiloConMayuscula;
    }

    #Creo  un método recortarDescripcion para que en la previsualización de los productos no se vea toda la descripción de cada uno. Recibe texto como parámetro
    public function recortarDescripcion($texto){
            #Creo la variable arrayTexto que al ser igualado a un explode, crea un array con cada palabra (ya que el delimitador es un espacio) del texto recibido
            $arrayTexto = explode(" ", $texto);#al devolver un array indexado, sus claves son numericas y sirve para acortar la descripcion
            #Creo un array vacío que va a contener la cantidad de palabras deseadas, en este caso, 20
            $textoAcortado  = [];

            #Creo un foreach que recorre $arrayTexto con claves valor
            foreach ($arrayTexto as $key => $value) {
                //Indica que si la clave es menor a 20, las palabras se vayan agregando al array vacío creado anteriormente. Va a haber 20 palabras ya que el array empieza en 0
                if ($key < 20) {
                    $textoAcortado []= $value;
                    #Si la clave es mayor o igual a 20, se corta el ciclo
                }else{
                    break;
                }
            }
            #retorna una cadena de texto gracias al implode, cuyo delimitador es el espacio. Permite juntar todos los valores del array por medio de este delimitador. Se le agrega los ... al final dando a entender que hay más información
            return implode(" ", $textoAcortado).'...';
        }

                                                            //Set - Sirven para cambiar el valor del atributo
 
    //Get - Sirven para obtener el valor del atributo
    #Estos son los métodos que acceden a los atributos. Son los getters
    public function getId()
    {
        return $this->id;
    }
 
    public function getModelo()
    {
        return $this->modelo;
    }
 
    public function getMarca()
    {
        return $this->marca;
    }
 
    public function getPrecio()
    {
        return $this->precio;
    }
 
    public function getMaterial()
    {
        return $this->material;
    }
 
    public function getEstilo()
    {
        return $this->estilo;
    }
 
    public function getDescripcion()
    {
        return $this->descripcion;
    }
 
    public function getImagen()
    {
        return $this->imagen;
    }
}