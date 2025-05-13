# Ejercicio 1: Números Primos
# Un número primo es un número natural mayor que 1 que tiene exactamente dos divisores.

# Descripción: Escribe un programa que determine si un número dado es primo.
# Lenguajes: JavaScript, C++, C#, Python
# Puntos Clave:

# Comprender los bucles y las condiciones.
# Optimización de algoritmos.

entrada = int(input("Ingrese un número: "))
primo = True
for i in range(2, entrada):
    if entrada % i == 0:
        primo = False
        break


def IsPrimeNumber(number):
    if number < 2:
        return "No es primo"
    for i in range(2, number):
        if number % i == 0:
            return "No es primo"
    return "Es primo"