# Ejercicio 3: Palíndromo
# Descripción: Verifica si una cadena de texto es un palíndromo.
# Lenguajes: JavaScript, C++, C#, Python
# Puntos Clave:

# Manipulación de cadenas.
# Comparación de caracteres.


def palindromo(cadena):
    cadena = cadena.lower().replace(" ", "")
    return cadena == cadena[::-1]

def replace(cadena):
    cadena = cadena.lower()
    cadena = cadena.replace(" ", "")
    return cadena


def main():
    cadena = input("Ingresa una cadena de texto: ")
    if palindromo(cadena):
        print("La cadena es un palíndromo.")
    else:
        print("La cadena no es un palíndromo.")

if __name__ == "__main__":
    main()