<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Temat projektu: Mechanizm zarzadzania struktur?? drzewiast??
## Autor: Szymon Mokrzycki
## Specyfikacja projektu

### Funkcjonalno??ci:
   1. Logowanie do panelu poprzez podanie loginu oraz has??a, kt??re b??d?? zapisywane w bazie i sprawdzane z ni??.
   2. Rejestracja nowego klienta.
   3. Dodanie nowego w??z??a.
   4. Usuwanie w??z??ow.
   5. Edycja wez????w.
   6. Sortowanie po id rosn??co i malej??co w??z????w i li??ci.
   7. Przenoszenie w??z????w do innych ga????zi.
   8. Rozwijanie i zwijanie drzewa.
   
### Interfejs serwisu
 <details>
       <summary>Ekran g????wny </summary>

![image](https://user-images.githubusercontent.com/80068582/174666541-a1654fef-c067-4beb-a026-039380d0aa68.png)

   </details>
	<details>
       <summary>Ekran logowania</summary>

![image](https://user-images.githubusercontent.com/80068582/174666471-ead66a7e-30d5-47e4-88df-814811564f08.png)
   </details>
   
   <details>
	<summary>Ekran rejestracji</summary>
	
![image](https://user-images.githubusercontent.com/80068582/174666614-560031b7-5dee-4444-9af2-242bda1beb20.png)	
   </details>
   
   <details>
	<summary>Dodawanie w??z??a</summary>
    
![image](https://user-images.githubusercontent.com/80068582/174667100-f9a9957f-83f0-47d4-8d4b-7deae0cbca23.png)
    </details>
    
   <details>
	<summary>Edytowanie w??z??a</summary>
    
![image](https://user-images.githubusercontent.com/80068582/174667362-847d2334-3e70-4431-9a65-c1ca6f134b24.png)
   </details>
   
   <details>
	<summary>Przenoszenie w??z??a</summary>
    
![image](https://user-images.githubusercontent.com/80068582/174667469-fa674b93-f334-4aa4-ba3f-ac2afdab6dfc.png)
   </details>
   
## U??yte technologie

PHP 8, Laravel 9, JavaScript, JQuery, CSS, Bootstrap, MySQL 5

## Zastosowane narz??dzia

phpMyAdmin

## Dane po????czenia z baz?? danych

   1. Host - localhost
   2. user - root
   3. password - ""
   4. dbname - drzewo_laravel
   
