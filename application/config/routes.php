<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'Testando';
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;

/*
Routes

Os routes serão os acionadores dos métodos no controller.

*/

$route['default_controller'] = 'Home'; // controlador padrão da classe
$route['404_override'] = '';  // caso da erro
$route['translate_uri_dashes'] = FALSE;

/*
default_controller: chama o controller principal da aplicação, definido como ‘Base’
salvar: chama o método Salvar do controller Base
editar/(:num): chama o método Editar do controller Base, passando na url o ID do registro a ser editado
atualizar: chama o método Atualizar do controller Base
excluir/(:num): chama o método Excluir do controller Base

*/

/*
Roteamento

O controlador agora está funcionando! Aponte seu navegador para [your-site-url]index.php/pages/view para ver sua página. Quando você visita index.php/pages/view/about você verá a página about, novamente incluindo o cabeçalho e o rodapé.

Usando regras de roteamento personalizadas, você tem o poder de mapear qualquer URI para qualquer controlador e método e se libertar da convenção normal: http://example.com/[controller-class]/[controller-method]/[arguments]

Vamos fazer isso. Abra o arquivo de roteamento localizado em application / config / routes.php e adicione as duas linhas a seguir. Remova todo o outro código que define qualquer elemento na matriz $route .

CodeIgniter lê suas regras de roteamento de cima para baixo e encaminha a solicitação para a primeira regra de correspondência. Cada regra é uma expressão regular (lado esquerdo) mapeada para um controlador e nome do método separado por barras (lado direito). Quando uma solicitação vem, CodeIgniter procura a primeira partida e chama o controlador e o método apropriados, possivelmente com argumentos.

Aqui, a segunda regra na matriz $routes corresponde a qualquer pedido usando a string curinga (:any) . e passa o parâmetro para o método view() da classe Pages .

Agora visite index.php/about . Será encaminhado corretamente para o método view() no controlador de páginas? Impressionante!

*/
