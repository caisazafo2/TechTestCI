# Prueba técnica - Laravel PHP

Este repositorio contiene el desarrollo de una prueba técnica para la implementación de una maqueta en Laravel + Ajax para almacenar información de usuarios.

## Versiones

Php 8.0.2
Blade-ui-kit/blade-icons 1.6
Bootstrap 5.0

## Descarga este proyecto

    git clone https://github.com/caisazafo2/TechTestCI.git

## Instalación

Ingresar a la carpeta del proyecto

    cd TechTestCI

Instalar todas las dependencias del proyecto

    composer install

Utiliza el archivo .env suministrado en el correo de entrega de este repositorio en la carpeta raiz del proyecto

Genera las claves de encripción del proyecto para el entorno de pruebas

    php artisan key:generate

Despliega el proyecto en el ambiente de producción

    php artisan serve

## Base de datos

El archivo del entorno de desarrollo .env incluye las credenciales de la base de datos que contiene los datos registrados por los usuarios y que se encuentra alojada en AWS.