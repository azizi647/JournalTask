<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">

</p>

## Jurnal Task


VERİLƏNLƏR : 

1) Sagirdlər - ( random olaraq 4 nefer misal üçün , seeder ilə FAKER vasitesiyle avto doldurulur)
2) Fennler - ( random olaraq 3 fenn misal üçün , seeder ilə FAKER vasitesiyle avto doldurulur)
3) Muellimler - ( random olaraq 3 nefer misal üçün , seeder ilə FAKER vasitesiyle avto doldurulur)
   Fenn muellime baglanilir
4) Tədris ili ( 2019.09.15 - 2019.05.31 ) 


TƏLƏB OLUNUR: 

3 menu olacaq
	1-ci menu Jurnal yarat
	2-ci menu Jurnal yaz
	3-ci menu Hesabat

-------------------------------------------------------------------------------------------------------------------------------------------------------------------

Jurnal yarat menusunda cedvel olacaq.Burda heftenin 5 gunu olacaq (6 ve 7 gunler olmayacaq) ve her gun 4 ders olacaq.Hemin gunlere ders baglanacaq.Yeni ustune vurub hemin gun hansi fenn olacaq secilir ve belelikle tedris ili ( 2019.09.15 - 2019.05.31 ) erzinde secilen gunde secilen fenn olacaq.Misal ucun 3-cu fun 2-ci saat Riyaziyyat secilib.Tedris ili erzinde her 2ci gun Riyaziyyat olacaq.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------

Jurnal yaz menusunda fenn ( select olur ) secilir. Hemin fenne qiymet (qiymet 1-5 arasi verile biler) , ie ( istirak edib) ve ya qb ( qaib) yazmaq olacaq.(Bos saxlamaq olmaz).1 dene sinif var deye sinif secimine ehtiyac yoxdur.Sagirdler hamisi eyni sinifdedi ( yuxarida verilen 4 nefer ).

-------------------------------------------------------------------------------------------------------------------------------------------------------------------

Hesabatda ise yekun tedris ili erzinde qiymet ortalamasi cixacaq (Bir fennden aldigi qiymetlerin cemini bol hemin fennden qiymet sayina )

table bu formada olacaq

Sagirdler | Azerbaycan dili | Riyaziyyat | Rus dili

Student1  |       5         |    3       |   2

Student2  |       3         |    4       |   3


-------------------------------------------------------------------------------------------------------------------------------------------------------------------

<p> Installation </p>


##Mac Os, Ubuntu and windows users continue here:
- Download composer https://getcomposer.org/download/
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan config:cache`
- Run `composer dump-autoload` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve --port=3333`

#####You can now access your project at localhost:3333/login :)
- Email: admin@admin.com 
- Pass: adminadmin 


------------------------------------------------------------------------------------------------------------------------------------------------------------------- 

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`

