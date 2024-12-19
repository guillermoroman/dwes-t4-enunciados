### **Enunciado del Ejercicio: Crear un Juego del Ahorcado con PHP y Sesiones**

En este ejercicio, desarrollarás un **juego del ahorcado** utilizando PHP y sesiones para manejar el estado del juego. El objetivo es que los jugadores puedan adivinar una palabra letra por letra. Si fallan demasiadas veces, pierden el juego.

Tarea principal será:

1. Mostrar el progreso de la palabra oculta utilizando **guiones bajos** (`_`) para las letras no adivinadas.
2. **Separar los guiones bajos con un espacio** para que sean más fáciles de leer.
3. Permitir a los jugadores introducir una letra, actualizar el estado del juego y mostrar el resultado actual.

---

### **Requisitos del Proyecto**

1. **Página Principal (`index.php`)**
   - Muestra:
     - El progreso actual de la palabra (con guiones bajos y espacios entre ellos).
     - Las letras que el jugador ya ha adivinado.
     - La cantidad de intentos restantes.
   - Proporciona un formulario para que el jugador introduzca una letra.

2. **Procesamiento de Letras (`procesar.php`)**
   - Comprueba si la letra introducida es correcta.
   - Si la letra está en la palabra, actualiza el progreso.
   - Si la letra no está en la palabra, reduce el número de intentos restantes.

3. **Reiniciar el Juego (`reset.php`)**
   - Limpia las sesiones y reinicia el juego.

---

### **Criterios de Evaluación**

1. **Muestra de la Palabra**
   - Los guiones bajos deben aparecer con un espacio entre ellos. Por ejemplo:
     - Para la palabra `PHP`, el progreso inicial debe mostrarse así: `_ _ _`.
     - Si el jugador adivina `P`, debe mostrarse: `P _ P`.

2. **Control de Letras**
   - El juego debe evitar que el jugador introduzca letras repetidas.
   - Solo debe aceptar letras válidas (no números ni caracteres especiales).

3. **Finalización del Juego**
   - Si el jugador adivina todas las letras, muestra un mensaje de victoria.
   - Si el jugador se queda sin intentos, muestra un mensaje indicando que perdió, junto con la palabra secreta.

4. **Código Limpio**
   - Usa sesiones para mantener el estado del juego.
   - Organiza el código de manera clara y modular.

---

### **Entrega**
🎮