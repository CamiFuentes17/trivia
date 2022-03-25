
# Continuous Integration
## Ejecución CI: 🏃‍♀️

Para esta entrega realizaremos el proceso de Continuous Integration con la herramienta de CI con Github: 

ℹ️ Tenemos que tener en cuenta que nuestro proyecto se encuentra realizado bajo PHP:

### ¿Cómo se realizo el proceso?: 📘
>
>1. Creamos un archivo YML para que se realizaran los workflows necesarios para el proceso.
>
>     En este caso existen workflows en la herramienta que facilita el uso de la misma según el lenguaje por lo cual se utilizo desde la siguiente herramienta:
>
  >>   Esta proviene del siguente enlace: [Workflows](https://github.com/CamiFuentes17/github-actions-for-ci/actions/new?category=none&query=php)
  >>
  >>    ![image](https://user-images.githubusercontent.com/26396833/160052544-f12d5898-2263-4168-969b-ae660fb73d32.png)
>
>2. Para este proceso queda almacenado en la siguiente ruta: [YML](https://github.com/CamiFuentes17/trivia/blob/7709e977751b6e5e0cd97fe5d66d45000a45ac05/.github/workflows/php.yml)
>
>3. Se realizo un Commit del workflow a la nueva rama.
>
>4. Adicional a esto se realizo un pull request.
>
>     Este proceso fallo por lo cual tuvimos que revisar las dependencias de PHP.
>       ![image](https://user-images.githubusercontent.com/26396833/160054212-f8971590-4486-4a91-9a70-9e9726d2031d.png)
>     
>5. Debemos tener en cuenta que para realizar el CI de este proyecto debe manejarse las dependencias de PHP, en este caso estas utilizan:
>
>1. **Composer**
>
>    Como nuestro proyecto se ejecuta de manera local los pasos realizados para estos fueron:
>  
>    - Instalar composer
>    - Realizar la creación del archivo composer.json [Instalación](https://getcomposer.org/doc/01-basic-usage.md)
>    - Realizar las instalaciones y configuraciones para que este fuera funcional:
>    
>    ![image](https://user-images.githubusercontent.com/26396833/160053607-3beedba4-fb94-4270-81bb-ef6cab7447c2.png)
>6. Posterior a las configuraciones procedimos a probar la funcionalidad del mismo:
>
>    ![image](https://user-images.githubusercontent.com/26396833/160054511-605ffa48-e5c9-4ab2-8104-82ed932d70d3.png)
>7. Luego del éxito de nuestra prueba comenzamos con la ejecución de nuestro proyecto que fue satisfactorio: 
>
>    ![image](https://user-images.githubusercontent.com/26396833/160054610-c0b03402-ff59-4264-85d1-92f48fb1df39.png)
>    
>8. Se intento realizar una prueba y a pesar de la ejecución éxitosa encontré que no era una manera integral de realizarla por lo cual se realizo sobre el código
>    ![image](https://user-images.githubusercontent.com/26396833/160055046-39ac79a3-2a4c-4b3c-9fd4-72d09d532d99.png)
>    
>9. Se investigo acerca de [PHPUnit](https://phpunit.readthedocs.io/es/latest/index.html)
>- Se realizo la instalación de Php unit
>- Se realizo la configuración en el composer
>- Se realizo la investigación de como funcionaba este: [Pruebas](https://phpunit.readthedocs.io/es/latest/writing-tests-for-phpunit.html)
>- Se realizaron pruebas para el proyecto 
>   ![image](https://user-images.githubusercontent.com/26396833/160055458-dd968a7c-b706-47f8-abcf-cc03d3b0d15b.png)
>- Se realizaron varias pruebas para ejecutar las pruebas sin embargo varias de ellas no fueron éxitosas
>   ![image](https://user-images.githubusercontent.com/26396833/160055646-fdd47b1b-3caa-4df1-a0ec-fcb4dc37eeb1.png)
>- Se realizaron validaciones en los códigos en las ejecuciones y este fue finalmente efectivo.
>   ![image](https://user-images.githubusercontent.com/26396833/160055754-e2cf9362-20d6-4481-a844-eb58c6f71ab1.png)


### Resultados: 🔎

<p>Gracias a todos los pasos realizados en el proceso es bastante gratificante evidenciar que se pueden realizar pruebas unitarias y ejecuciones de manera autimatica para así tener los proyectos más organizados y estructurados.</p>
  
### Autor  👩‍🎓 👩‍💻
  Yudy Camila Fuentes Pardo

