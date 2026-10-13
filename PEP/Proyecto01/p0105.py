# operadores lógicos

b = False
b = True


c = 0

# and==y      or==o
"""
if (c != 0):
    print("la sopa")
elif (b):
    print ("la silla")
else:
    print("el pepino")
"""
# and
"""
m18 = False
piso = True
nombre = "jose"
# si es mayor se tienen que cumplir las 2
# pero si te llamas jose da igual todo lo demas eres muy mayor
if ( (m18 and piso) or nombre=="jose") :
    print ("eres muy mayor")

# para ser adulto me vale con cualquiera de las dos cosas
# pero si te llamas jose da igual todo lo demas te considero adulto
if (m18 or piso or (nombre == "jose")):
    print ("eres adulto")
"""
# entrar: mas de 20 años y (o ser primo o ser hermano)

edad = 22
parentesco = "primo"

if (edad > 20 ) and (parentesco == "primo" or parentesco == "hermano"):
    print ("puedes entrar")


