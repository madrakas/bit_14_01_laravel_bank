<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

![LICENSE](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
![Static Badge](https://img.shields.io/badge/%20Coffe-Free-yellow)
![Eco Status](https://img.shields.io/badge/ECO-Friendly-green.svg)
[![Discord](https://discord.com/api/guilds/571393319201144843/widget.png)](https://discord.gg/dRwW4rw)

# BIT Full stack developer course – Part 14. Deeper into Laravel. Final practice - Laravel Bank

_My journey to become a full stack developer_

<br>

## 🌟 About

This project is a part of my workbook from Full stack developers course at BIT This is the 14th part of the course - Final practice - Laravel Bank

This project is for educational porpuses only. Pull request are welcome, but priority for project authors! Thank you for your cooperation!

## 🧭 Other repositories from same course
1. [General programming skills and JS](https://github.com/madrakas/bit_01_Intro_to_programming_and_JS/)
2. [Intro to HTML and CS](https://github.com/madrakas/bit_02_Intro_to_html/)
3. [HTML and CSS basics, UFO 404 page](https://github.com/madrakas/bit_03_html-ufo)
4. [HTML and CSS,  Real Estate Website](https://github.com/madrakas/bit_04_html_real_estate/)
    1. [Practice No.1: Photographer website](https://github.com/madrakas/bit_04_01_homework_photographer)
    2. [Practice No.2: Collab landing page](https://github.com/madrakas/bit_04_01_homework_colab/)
5. [JavaScript HTML DOM intro](https://github.com/madrakas/bit_05_dom_intro)
6. [JavaScript Kanban website](https://github.com/madrakas/bit_06_js-kanban)
    1. [Practice No.1: Random color app](https://github.com/madrakas/bit_06_01_homework_random_color_app)
    2. [Practice No.2: Simple JS game](https://github.com/madrakas/bit_06_02_homework_simple-game/)
7. [React intro](https://github.com/madrakas/bit_07_react_intro)
    1. [Practice No.1. React page design](https://github.com/madrakas/bit_07_01_homework_simple-react-page-design)
    2. [Practice No.2. React calculator](https://github.com/madrakas/bit_07_02_homework_calculator)
8. [React + Bootstrap website](https://github.com/madrakas/bit_08_bootstrap-site/)
    1. [Practice No.1: React + bootstrap Investment calculator](https://github.com/madrakas/bit_08_01_hw_react_bootstrap_invest_calc/)
    2. [Practice No.2: React countries API](https://github.com/madrakas/bit_08_02_hw_react_countries)
    3. [Practice No.3: React use context app](https://github.com/madrakas/bit_08_03_hw_react-usecontext-app)
    4. [Practice No.4: React BMI calculator](https://github.com/madrakas/bit_08_04_hw_react_bmi_calculator)
9. [Intro to backend. Quick JS overview](https://github.com/madrakas/bit_09_backend-intro/)
10. [Backend intro. React](https://github.com/madrakas/bit_10_backend_intro_react)
11. [Backend. PHP](https://github.com/madrakas/bit_11_backend_php/)
    1. [Practice No.1. Bank V1](https://github.com/madrakas/bit_11_01_hw_bank_v1)
12. [MVC, Webmix](https://github.com/madrakas/bit_12_webmix_oop_php)
    1. [Practice No.1. Bank V2](https://github.com/madrakas/bit_12_01_hw_bank_v2_mvc_webmix/)
13. [Intro to Laravel](https://github.com/madrakas/bit_13_intro_to_laravel)
14. [Deeper into Laravel](https://github.com/madrakas/bit_14_deeper_into_laravel) 
    1. Practice No.1. Bank V3 (current repository)

## 🎯 Project features/goals

*  Request validations
*  Model dependencies
*  Dsiplaying errors and custom messages
*  Laravel + JS
*  Photo uploads
*  Laravel + React
        
## 🧰 Getting Started

### 💻 Prerequisites

xampp - _download and install_

```
https://www.apachefriends.org/
```

Node.js - _download and install_

```
https://nodejs.org
```

Composer - _download and install_

```
https://getcomposer.org/download/
```

Git - _download and install_

```
https://git-scm.com
```

### 🏃 Run locally

Would like to run this project locally? Open terminal and follow these steps:

1. Clone the repo to your xampp htdocs folder
    ```
    git clone https://github.com/madrakas/bit_11_backend.git
    ```
2. Run Xampp Apache and MySQL components

3. Install NPM packages
    ```sh
    npm i
    ```
    or
    ```sh
    npm install
    ```
4. Install composer packages

    ```sh
    composer install
    ```
    
6. Run Webpack resource updater

   ```
   npm start
   ```

7. Create empty database in Xampp

    ```
    http://localhost/phpmyadmin
    ```

8. create _.env_ file in projects parent directory. You can simple copy and rename _.env.example_. Add your database info in _.env_ file

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lara_bank
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
9. Run Seeder to add data to your database

    ```
    php artisan migrate:fresh --seed
    ```

11. Open [http://localhost/public](http://localhost/public) to view results in your browser.
   
### 🧪 Running tests

No tests to run

## 🎅 Authors

Arvydas [Github](https://github.com/madrakas)

Sensei: A-Kija [Github](https://github.com/A-Kija)

## ⚠️ License

Distributed under the MIT License. See LICENSE.txt for more information.

## 🔗 Other resources

No other resources


