<?php
class Libro {
    public $titulo;           
    public $autor;            
    public $anioPublicacion;  
    public $disponible;       

    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo; 
        $this->autor = $autor;   
        $this->anioPublicacion = $anioPublicacion; 
        $this->disponible = true; 
    }

    public function prestarLibro() {
        if ($this->disponible) { 
            $this->disponible = false; 
            echo "El libro '{$this->titulo}' ha sido prestado.\n";
        } else {
            echo "El libro '{$this->titulo}' ya está prestado.\n";
        }
    }

    public function devolverLibro() {
        $this->disponible = true; 
        echo "El libro '{$this->titulo}' ha sido devuelto.\n";
    }

    public function mostrarInformacion() {
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Año de Publicación: {$this->anioPublicacion}\n";
        echo "Disponible: " . ($this->disponible ? "Sí" : "No") . "\n";
    }
}


$libro1 = new Libro("Harry Potter y la Piedra Filosofal", "J.K. Rowling", 1997);
$libro2 = new Libro("El Principito", "Antoine de Saint-Exupéry", 1943);
$libro3 = new Libro("1984", "George Orwell", 1949);

echo "Información inicial de los libros:\n";
$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
$libro3->mostrarInformacion();

echo "\nPrestando 'Harry Potter y la Piedra Filosofal':\n";
$libro1->prestarLibro(); 
$libro1->prestarLibro(); 

echo "\nDevolviendo 'Harry Potter y la Piedra Filosofal':\n";
$libro1->devolverLibro();

echo "\nInformación después de devolver el libro:\n";
$libro1->mostrarInformacion();

echo "\nPrestando '1984':\n";
$libro3->prestarLibro();
$libro3->mostrarInformacion();


?>
