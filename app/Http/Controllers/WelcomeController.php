<?php namespace App\Http\Controllers;
use App\Post;
use App\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post= \DB::table('posts')->orderBy('id','desc')->paginate(6);
     
     return view('welcome',compact('post'));
     
  
	}

	public function article($slug){

     
		$post=Post::findBySlug($slug);
		 
		return view('article',compact('post'));

       }

       public function tags($tag){

        $post=Post::where('tags','Like','%'.$tag.'%')->get();


        return view('tags',compact('post'));

		}

		public function videobrian(){

	    $post = \DB::table('posts')->where('tags', 'videobrian')->get();

         return view('videobrian',compact('post'));

		}

		public function laravel(){
        
        $post = \DB::table('posts')->where('tags', 'laravel')->get();

         return view('laravel',compact('post'));

		}



	public function prueba(){

	$a= new Post;
		$a->title='jquery';
		$a->contennt='jQuery es una biblioteca de JavaScript, creada inicialmente por John Resig, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web. Fue presentada el 14 de enero de 2006 en el BarCamp NYC. jQuery es la biblioteca de JavaScript más utilizada.1

jQuery es software libre y de código abierto, posee un doble licenciamiento bajo la Licencia MIT y la Licencia Pública General de GNU v2, permitiendo su uso en proyectos libres y privados.2 jQuery, al igual que otras bibliotecas, ofrece una serie de funcionalidades basadas en JavaScript que de otra manera requerirían de mucho más código, es decir, con las funciones propias de esta biblioteca se logran grandes resultados en menos tiempo y espacio.

Las empresas Microsoft y Nokia anunciaron que incluirán la biblioteca en sus plataformas.3 Microsoft la añadirá en su IDE Visual Studio4 y la usará junto con los frameworks ASP.NET AJAX y ASP.NET MVC, mientras que Nokia los integrará con su plataforma';
        $a->tags='jquery,2015';
        $a->photo='http://4.bp.blogspot.com/-pxHQG_3rve0/Twy6zxCinOI/AAAAAAAAAJs/gsQuXcKByAY/s1600/wallpaper_jquery-morado.png';
	    $a->save();



		$a= new Post;
		$a->title='laravel 5';
		$a->contennt='Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.2';
        $a->tags='laravel 5,2015';
        $a->photo='http://fc05.deviantart.net/fs71/f/2012/163/a/c/laravel___ignited_by_rafdesign-d53afsw.jpg';
	    $a->save();



		$a= new Post;
		$a->title='bootstrap';
		$a->contennt='Bootstrap, es un framework originalmente creado por Twitter, que permite crear interfaces web con CSS y JavaScript, cuya particularidad es la de adaptar la interfaz del sitio web al tamaño del dispositivo en que se visualice. Es decir, el sitio web se adapta automáticamente al tamaño de una PC, una Tablet u otro dispositivo. Esta técnica de diseño y desarrollo se conoce como “responsive design” o diseño adaptativo.

El beneficio de usar responsive design en un sitio web, es principalmente que el sitio web se adapta automáticamente al dispositivo desde donde se acceda. Lo que se usa con más frecuencia, y que a mi opinión personal me gusta más, es el uso de media queries, que es un módulo de CSS3 que permite la representación de contenido para adaptarse a condiciones como la resolución de la pantalla y si trabajás las dimensiones de tu contenido en porcentajes, puedes tener una web muy fluida capaz de adaptarse a casi cualquier tamaño de forma automática.

Pero si no quieres nada que ver con los media queries, otra muy buena opción es el uso del framework de Bootstrap, que como te dije te ayudará a desarrollar tus sitios adaptativos.

Aun ofreciendo todas las posibilidades que ofrece Bootstrap a la hora de crear interfaces web, los diseños creados con Bootstrap son simples, limpios e intuitivos, esto les da agilidad a la hora de cargar y al adaptarse a otros dispositivos. El Framework trae varios elementos con estilos predefinidos fáciles de configurar: Botones, Menús desplegables, Formularios incluyendo todos sus elementos e integración jQuery para ofrecer ventanas y tooltips dinámicos.

Bootstrap tiene un soporte relativamente incompleto para HTML5 y CSS 3, pero es compatible con la mayoría de los navegadores web. La información básica de compatibilidad de sitios web o aplicaciones esta disponible para todos los dispositivos y navegadores. Existe un concepto de compatibilidad parcial que hace disponible la información básica de un sitio web para todos los dispositivos y navegadores. Por ejemplo, las propiedades introducidas en CSS3 para las esquinas redondeadas, gradientes y sombras son usadas por Bootstrap a pesar de la falta de soporte de navegadores antiguos. Esto extiende la funcionalidad de la herramienta, pero no es requerida para su uso.';
        $a->tags='bootstrap,2015';
        $a->photo='http://richard-leyton.com/Content/images/carousel3.jpg';
	    $a->save();


	    $p=new User;

	    $p->name='guillermo romo';
	    $p->email='guillospy@gmail.com';
	    $p->username='guillospy';
	    $p->password=\Hash::make('920517920517');
	    $p->save();






	    return "se crearon todas las pruebas ";

		
		
}

}







