
# Análisis Primer corte: 📃

Para esta entrega realizaremos el proceso con la herramienta de Sonar Cloud para realizar el análisis del proyecto, de las mejoras que puede este tener y con esto simplificar los procesos de manera simplificada y automática.

## Herramienta: 🧰
  **Sonar Cloud** es un servicio que detecta errores y vulnerabilidades en los repositorios, proporciona una guia para mejorar la calidad y seguridad para que el resultado quede de una manera más limpia. 

### Paso a paso: 📍
>El link mediante el cual manejaremos esto es: https://sonarcloud.io/
>
>Debemos tener un repositorio público para que pueda acceder a nuestro código, en caso de que nuestro repositorio sea privado debe usarse la versión paga.
>
>Nos pide un acceso con nuestro repositorio para acceder a nuestra cuenta y así acceder a nuestro código fuente. 
>
>Permitimos acceso al repositorio que analizaremos en este proceso.
>
>Esperamos la ejecución del análisis de nuestro repositorio.

### Resultados: 🔎

El resultado obtenido por medio de esta herramienta fue el siguiente: 

![image](https://user-images.githubusercontent.com/26396833/159193921-7f8dbb66-3c5c-4d18-89a3-9870a55e87b0.png)

Por lo cual podemos evidenciar que tal como se había analizado en nuestro documento anterior tenemos muchas mejoras de code smells y en este caso también analizaremos la seguridad. 


>Como se evidencia en la siguiente imagen este código no es tan extenso para tener tanto code smells
>
>![image](https://user-images.githubusercontent.com/26396833/159195202-853fd47a-1b9d-4b21-af4a-04fcbae45db7.png)
>
>Esto quiere decir que a nivel de realización del proyecto tenemos mejoras grandes ya que el código fuente tiene demasiado código smells sin embargo este funciona. 

Por lo cual este código se puede analizar de la siguiente manera:
 1. Cumple
    - ✔️ Es funcional
    - ✔️ No genera Bugs  
    - ✔️ Tiene dos módulos uno donde ejecuta el juego y otro donde realiza el código

 2. No cumple
    - ❌ Su código es duplicado
    - ❌ No es un código escrito de manera simple
    - ❌ Los métodos del código son largos
    - ❌ No cuenta con pruebas unitarias

## Mejoras de la herramienta: 💡

Los resultados detallados de la herramienta ha sido a nivel de code smells y de seguridad, por lo cual analizaremos un poco estas sugerencias.

  1. Tenemos dos sugerencias de seguridad en las cuales:     
      1. Nos dice que una función la tenemos con vulnerabilidad de seguridad por el método **rand** nos indica que no debe usarse para aplicaciones críticas para la seguridad o para proteger datos confidenciales
        ![image](https://user-images.githubusercontent.com/26396833/159197138-67b3fed9-391c-4b6e-8bd3-96a56d8ccd73.png)
      2. De igual manera se realiza el proceso en la siguiente función que nos permite generar un número aleatorio según los parametros que enviemos.
        ![image](https://user-images.githubusercontent.com/26396833/159197222-1a0ddd69-670f-4568-8c38-d68b32c43225.png)
  
  2. Tenemos de las mejoras en code smells del código 
      1. En este caso lo que nos indica es que no debemos escribir código en una linea ya que esto puede generar dificultades al leerse, lo recomendable es manejar las identaciones manejadas por el lenguaje como los {}, tal como se indico en la documentación del [clean code](https://github.com/CamiFuentes17/trivia/blob/master/CSDT-2022-1.md)
          ![image](https://user-images.githubusercontent.com/26396833/159197690-58b721c8-d2a0-48d5-9380-9cdd863f95e0.png)
          
      2. De igual manera como se explicaba en la documentación se debería mantener lo más simple posible y esto no se realiza, en este caso funciona lo documentado en la sección de [KISS](https://github.com/CamiFuentes17/trivia/blob/master/CSDT-2022-1.md)
         ![image](https://user-images.githubusercontent.com/26396833/159198233-e27717e5-e9af-40bd-9328-d674c29b4fbd.png)
         
      3. Como menor prioridad pero que podemos realizar es mejorar el uso del operador. 
          ![image](https://user-images.githubusercontent.com/26396833/159198410-4d9bba2b-b943-4d3d-9b01-ed7d8484b96f.png)
          
      4. Para finalizar y no menos importante el proyecto no cuenta con pruebas que son importantes a tener en cuenta. 


### Autor  👩‍🎓 👩‍💻
  Yudy Camila Fuentes Pardo

