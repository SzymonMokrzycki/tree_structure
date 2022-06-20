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

# Temat projektu: Mechanizm zarzadzania strukturą drzewiastą
## Autor: Szymon Mokrzycki
## Specyfikacja projektu

### Funkcjonalności:
   1. Logowanie do panelu poprzez podanie loginu oraz hasła, które będą zapisywane w bazie i sprawdzane z nią.
   2. Rejestracja nowego klienta.
   3. Dodanie nowego węzła.
   4. Usuwanie węzłow.
   5. Edycja wezłów.
   6. Sortowanie po id rosnąco i malejąco węzłów i liści.
   7. Przenoszenie węzłów do innych gałęzi.
   8. Rozwijanie i zwijanie drzewa.
   
### Interfejs serwisu
 <details>
       <summary>Ekran główny </summary>

![panel_adm](https://user-images.githubusercontent.com/79647437/121525382-8d063a00-c9f8-11eb-8af6-b84ace2b4750.PNG)
<p>Strona główna panelu administratora</p>
	
![panel_kl](https://user-images.githubusercontent.com/79647437/121525666-eb331d00-c9f8-11eb-861c-5c6bb0f59dbf.PNG)
	![panel_kl2](https://user-images.githubusercontent.com/79647437/121525723-fbe39300-c9f8-11eb-9064-aa1c4823fba0.PNG)
<p>Strona główna panelu klienta</p>


   </details>
	<details>
       <summary>Ekran logowania</summary>

![admin_login](https://user-images.githubusercontent.com/79647437/115704734-03c57600-a36c-11eb-8908-93d2b89c8a11.PNG)
![client_login](https://user-images.githubusercontent.com/79647437/115704759-09bb5700-a36c-11eb-93c2-ba64a2785baf.PNG)

           <p>Panele umożliwiają zalogowanie się do konta administratora i klienta</p>
   </details>
   
   <details>
	<summary>Ekran rejestracji</summary>
	
![client_registration](https://user-images.githubusercontent.com/79647437/115704955-3f604000-a36c-11eb-9c7d-de4cf615c381.PNG)

	<p>Umożliwia zarejestrowanie się klienta do serwisu sklepu internetowego</p>	
   </details>
   
   <details>
	<summary>Ustawienia danych administratora</summary>
	
![ust_admin](https://user-images.githubusercontent.com/79647437/121769848-39196380-cb66-11eb-91ff-49b7dd8c1738.PNG)

	<p>Po przejściu na podstronę ustawienia ze strony głównej użytkownik może dokonać zmiany nazwy użytkownika oraz adresu e-mail</p>
![hasl_afmin](https://user-images.githubusercontent.com/79647437/121770109-ad083b80-cb67-11eb-8215-63b462fad7cc.PNG)
	<p>Pod formularzem znajduje się przycisk prowadzący do zmiany hasła, gdzie użytkownik może zmienić swoje hasło</p>
   </details>
