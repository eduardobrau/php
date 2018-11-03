<?php 
class CSVParser 
{ 
    private $filename, $data, $header, $counter, $separator;
    
    public function __construct($filename, $separator = ',') 
    { 
        $this->filename  = $filename; 
        $this->separator = $separator; 
        $this->counter   = 1; 
    }

    /**
     * @throws Exception
     */
    public function parse()
    { 
        if (!file_exists($this->filename)) { 
            throw new Exception("Arquivo {$this->filename} não encontrado");
            //die("Arquivo {$this->filename} não existe");
        } 
        if (!is_readable($this->filename)) { 
            throw new Exception("Arquivo {$this->filename} não pode ser lido"); 
        }
        // Lê o arquivo e o coloca em memória em forma de array a $this->data
        $this->data   = file($this->filename);
        // a função str_getcsv transforma uma string em formato csv em um array
        $this->header = str_getcsv($this->data[0], $this->separator);
        //echo '<pre>'; print_r($this->data); echo '</pres>';
        //echo '<pre>'; print_r($this->header); echo '</pres>';
        return TRUE;
    } 
    
    public function fetch() 
    { 
        if (isset($this->data[$this->counter])) 
        {
            //echo '<pre>'; var_dump($this->data[$this->counter]); echo '</pres>';
            /*
             * Retorna o segundo valor do array $this->data[1] que é uma string
             * no formato csv e incrementa em mais 1 a propriedade counter
             * transformando o valor dessa string em um novo array onde cada
             * ';' encontrado nessa string será um novo indice desse array()
            */
            $row = str_getcsv($this->data[$this->counter ++], $this->separator);
            //echo '<pre>'; print_r($row); echo '</pres>';

            foreach ($row as $key => $value) { 
                $row[ $this->header[$key] ] = $value; 
            } 
            return $row; 
        } 
    } 
} 