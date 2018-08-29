<?php

class Pages extends CI_Controller {

  if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          //Whoops, não temos uma página para isso!
          show_404();
  }

  $data['title'] = ucfirst($page); // Capitalize a primeira letra

  $this->load->view('header', $data);
  $this->load->view('pages/'.$page, $data);
  $this->load->view('footer', $data);
}


/*
Você criou uma classe chamada Pages , com um método de exibição que aceita um argumento chamado $page . A classe Pages está estendendo a classe CI_Controller . Isso significa que a nova classe de páginas pode acessar os métodos e variáveis ​​definidos na classe CI_Controller ( system / core / Controller.php ).

O controlador é o que se tornará o centro de cada solicitação para sua aplicação web. Nas discussões CodeIgniter muito técnicas, pode ser referido como o super objeto . Como qualquer classe php, você se refere a isso dentro de seus controladores como $this . Referindo $this é assim que você irá carregar bibliotecas, visualizações e geralmente comandar o framework.

Agora você criou seu primeiro método, é hora de criar alguns modelos de página básicos. Vamos criar duas "visualizações" (modelos de página) que atuam como rodapé e cabeçalho da página.




Adicionando lógica ao controlador

Anteriormente, você configura um controlador com um método view() . O método aceita um parâmetro, que é o nome da página a ser carregada. Os modelos de página estática estarão localizados no diretório application / views / pages / .

Nesse diretório, crie dois arquivos chamados home.php e about.php . Dentro desses arquivos, digite algum texto - qualquer coisa que você quiser - e salve-os. Se você gosta de ser particularmente não originais, experimente "Hello World!".

Para carregar essas páginas, você precisará verificar se a página solicitada realmente existe:

Agora, quando a página existe, é carregada, incluindo o cabeçalho e rodapé, e exibida para o usuário. Se a página não existir, um erro "404 Página não encontrado" é mostrado.

A primeira linha neste método verifica se a página realmente existe. A função native file_exists() do PHP é usada para verificar se o arquivo está onde é esperado. show_404() é uma função CodeIgniter embutida que processa a página de erro padrão.

No modelo de cabeçalho, a variável $title foi usada para personalizar o título da página. O valor do título é definido neste método, mas em vez de atribuir o valor a uma variável, ele é atribuído ao elemento do título na matriz de $data .

A última coisa que tem que ser feita é carregar as visualizações na ordem em que devem ser exibidas. O segundo parâmetro no método view() é usado para passar valores para a vista. Cada valor na matriz de $data é atribuído a uma variável com o nome de sua chave. Portanto, o valor de $data['title'] no controlador é equivalente a $title na visualização.

*/



 ?>
