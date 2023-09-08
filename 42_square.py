import turtle
def drawSquare (ttl, x , y, lenght):
    ttl.penup ()
    ttl.goto(x,y)
    ttl.setheading(0)
    ttl.pendown ()
    for count in range (4):
        ttl.forward (lenght)
        ttl.right(90)    
    ttl.penup ()
    
bob= turtle . Turtle ()
bob.speed (10)
bob.pensize(3)
drawSquare (bob,0,0,100)
turtle . done()