<div class="sidebar">
    
    <!--Na diretiva each, os parametros são:
    1º: nome (caminho) da view parcial que irá conter cada item
    2º: array de itens
    3º: nome da variavel de cada item
    --> 
    @each('parciais.item', $produtos, 'produto', 'parciais.semitens')  
</div>
              
