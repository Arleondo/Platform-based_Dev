"""programa que permita al usuario ingresar las cantidades de las compras de un cliente
(se desconoce la cantidad de datos que se ingresará, la cual puede cambiar en cada ejecución)
,parando el ingreso de datos cuando el usuario ingrese la cantidad de 0.
Si se ingresa una cantidad negativa, no se debe procesar y se debe pedir que ingrese un nuevo monto.
Al finalizar, informar el total a pagar teniendo que cuenta que,
si las ventas superan el total de $1500, se le debe aplicar un 8% de descuento"""
import turtle

"""
import math
total=0
cantidad=float(input("Monto de una venta: $"))
while cantidad!=0:
    if cantidad<0:
        print("Monto no válido.")
    else:
        total+=cantidad
    cantidad=float(input("Monto de una venta: $"))
if total>1500:
    total-=total*0.08
print("Monto total a pagar: $", total)


import random
print ()
Numero_a=random.randint(10, 99)
x=1
while True:
    if x<5:
        Adivinar=int(input("Ingresar numero (De 2 digitos):"))
        if Adivinar==Numero_a:
            print ("Ganaste")
            break
        if Adivinar > Numero_a:
            print("El numero es menor")
        if Adivinar < Numero_a:
            print("El numero es mayor")
    else:
        var=input("Seguir intentado?(Y/N): ")
        if var=="Y":
            x=1
            continue
        elif var=="N":
            print("Fallaste")
            print("Este era el numero: " + str(Numero_a))
            break
        else:
            print ("Ingresar Y/N >:|")
            continue
    x = x + 1

pares = 0
y = True
while y:
    Num_Ingresado = input("Ingresar un numero entero (Para salir -1): ")
    if int(Num_Ingresado) == -1:
        y = False
    elif Num_Ingresado != -1:
        x = 0
        if int(Num_Ingresado) % 2 == 0:
            pares = pares + 1
        for i in range(0, len(Num_Ingresado)):
            x = x + int(Num_Ingresado[i])
        print("La suma de digitos de " + str(Num_Ingresado) + " es " + str(x))
"""

from turtle import *

ventana = turtle.Screen()
ventana.title("Waza")
ventana.bgcolor("white")
t1 = turtle.Turtle()
t1.speed(0)
t1.color("red")
t1.hideturtle()
t1.pensize(3)
t1.penup()
t1.goto(0, 100)
t1.pendown()

for i in range(0, 36):
    if (i%3==0):
        t1.circle(40)
    t1.forward(20)
    t1.right(10)

input ("Press enter to finish")