<?php

    class Livro{

        private $titulo;
        private $pages = [];

        public function __construct($titulo)
        {
            $this->titulo = $titulo;
        }

        function addPage(Page $page){
            $this->pages[] = $page;
        }
    }

    class Page{
        private $title;
        private $texto;
        private $livro;
        private $destaque = [];
        private $date;

        public function __construct(String $title, String $texto, $destaque, Livro $livro)
        {
            $this->titulo = $title;
            $this->texto = $texto;
            $this->livro = $livro;
            $this->livro -> addPage($this);
            $this->date = new \DateTime();

        }

        function addDestaque(String $destaque){
            $this->destaque[]=$destaque;
        }

        function __clone()
        {
            $this->title = "Clone de: ".$this->title;
            $this->texto = $this->texto;
            $this->livro->addPage($this);
            $this->destaque = [];
            $this->date = new \DateTime();

        }
    }

    $livro = new Livro("Aceleração PHP");
    $pagina = new Page(
        "Capitulo 1",
        "Desing Patterns",
        "Padroes GOF",
        $livro
    );
    $pagina->addDestaque(
        "O padrão prototype pode ser usado nos testes"
    );

    echo "<br>--------------------------------------------<br>";
    $pagina2 = clone $pagina;
    echo "Objeto original: ";
    print_r($pagina);
    echo "<br><br>";
    echo "<br>Clone: ";
    print_r($pagina2);    

?>