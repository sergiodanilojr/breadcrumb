# Breadcrumb @ElePHPant

[![Maintainer](http://img.shields.io/badge/maintainer-@sergiodanilojr-blue.svg?style=flat-square)](https://twitter.com/sergiodanilojr)
[![Source Code](http://img.shields.io/badge/source-elephpant/breadcrumb-blue.svg?style=flat-square)](https://github.com/sergiodanilojr/breadcrumb)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/elephpant/breadcrumb.svg?style=flat-square)](https://packagist.org/packages/elephpant/breadcrumb)
[![Latest Version](https://img.shields.io/github/release/elephpant/breadcrumb.svg?style=flat-square)](https://github.com/sergiodanilojr/breadcrumb/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/sergiodanilojr/breadcrumb.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/breadcrumb)
[![Quality Score](https://img.shields.io/scrutinizer/g/sergiodanilojr/breadcrumb.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/breadcrumb)
[![Total Downloads](https://img.shields.io/packagist/dt/elephpant/breadcrumb.svg?style=flat-square)](https://packagist.org/packages/sergiodanilojr/breadcrumb)

###### Breadcrumbs in an uncomplicated way. This component facilitates the way to create breadcrumbs for your website, to favor a more accessible navigation. It was designed to work very well with the Bootstrap Framework. Besides being very easy to use, it has very interesting possibilities, such as adding new separators and new CSS classes to style this interface component to your liking. The Breadcrumb Component also allows you to have access to the Array assembled to feed into other features of your system, such as a microformat, for example.

Breadcrumbs de maneira descomplicada. Este componente facilita a forma de criar breadcrumbs para o seu website, para favorecer uma navegação mais acessível. Foi projetadopara trabalhar muito bem com o Bootstrap Framework.
Além de ser muito fácil de utilizar ele conta com possibilidades bem interessantes, como adicionar novos separadores e novas classes CSS para estilizar ao seu gosto este componente da interface.
O Breadcrumb Component também possibilita que você tenha acesso ao Array montado para alimentar em outras features do seu sistem, como um microformato, por exemplo. 


### Highlights

- Add others classes CSS (adicione outras classes CSS)
- Output as array (saída em Array)
- It's possible add a other separator (possibilita adicionar outro separador de Links*)
- Compatible with Bootstrap Framework (compatível com o Framework CSS Bootstrap)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Breadcrumb is available via Composer:

```bash
"elephpant/breadcrumb": "dev-master"
```

or run

```bash
composer require elephpant/breadcrumb
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### Set all nodes of Your Web Page:

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb(null))
    ->base("https://www.sergiodanilojr.com.br", "Home")
    ->addCrumb("Blog", "blog")
    ->addCrumb("Nome do Artigo", "url-do-artigo")
    ->addCrumb("Comentários", "comments");

//In Your webpage you can show the breadcrum, like that
echo $breadcrumb->render();
```
#### Change the links separator in the constructor method:
```php
<?php
require __DIR__ . "/../vendor/autoload.php";
$separator = "<i class='icon-angle-right'></i>";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb($separator));

//NOTEs:
// The default value of the separator is null. But the Bootstrap use with the 'content' attribute the slash ("/") like a separator 
// The separator's of string type, therefore you can set html or just a character (example: '>>')

```

#### Choose if you want show the Home Page Name and insert a icon in the place:
```php
<?php
require __DIR__ . "/../vendor/autoload.php";
$icon = "<i class='icon-home'></i>";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb(null));
$breadcrumb->base("https://elephpant.com.br", "Home",false, $icon);
//NOTE: The third param's is false for hide the name (Home)

//If you want to put another class insert value in the 5th param:
$class = "p-3 rounded";
$breadcrumb->base("https://elephpant.com.br", "Home",false, $icon, $class);

```

#### Insert a class in the Crumb (link):
```php
<?php
require __DIR__ . "/../vendor/autoload.php";
$class = "text-underline text-danger";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb(null));
$breadcrumb->base("https://elephpant.com.br", "Home",false, $icon)
->addCrumb("Blog", "blog", $class);

```

#### Output all nodes of your Breadcrumb as array
```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb(null))
    ->base("https://www.sergiodanilojr.com.br", "Home")
    ->addCrumb("Blog", "blog")
    ->addCrumb("Nome do Artigo", "url-do-artigo")
    ->addCrumb("Comentários", "comments");

print_r($breadcrumb->allCrumbs());

```

## Contributing

Please see [CONTRIBUTING](https://github.com/sergiodanilojr/breadcrumb/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email sergiodanilojr@hotmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para sergiodanilojr@hotmail.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Sérgio Danilo Jr.](https://github.com/sergiodanilojr) (Developer)
- [All Contributors](https://github.com/sergiodanilojr/breadcrumb/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/sergiodanilojr/breadcrumb/blob/master/LICENSE) for more information.