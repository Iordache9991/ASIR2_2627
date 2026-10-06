# vamos a hacer un programa que lea la edad y diga si eres mayor de edad

edad = int(input("Dime tu edad "))
nombre = input("Dime tu nombre")
email = input("Dime tu email")

print ("Te llamas "+nombre)
print ("Tu email es "+email)
if (edad >= 18): # > 17
    print(" eres mayor de edad")
else:
    print(" NO eres mayor")

print (f"Tu nombre es {nombre} y tu email es {email}")

print("La variable email es del tipo "+str(type(email)))

