# Ejercicio 2: Fibonacci
# Descripción: Genera la secuencia de Fibonacci hasta un número n dado.
# Lenguajes: JavaScript, C++, C#, Python
# Puntos Clave:

# Uso de recursión y/o iteración.
# Manejo de series y secuencias.

numb = int(input("Ingrese un número: "))
a = 0
b = 1

for i in range(numb):
    print(a)
    a, b = b, a + b
# The Fibonacci sequence is a series of numbers in which each number is the sum of the two preceding ones, usually starting with 0 and 1.

def Fibonacci(n):
    a = 0
    b = 1
    for i in range(n):
        print(a)
        a, b = b, a + b