import turtle
from PIL import Image

def save_as_jpg(canvas, filename):
    canvas.postscript(file=filename + ".eps")
    img = Image.open(filename + ".eps")
    img.save(filename + ".jpg", "jpeg")
    img.close()

def drawrectangle(ttl, x, y, width, height):
    ttl.up()
    ttl.goto(x, y)
    ttl.setheading(0)
    ttl.down()
    for i in range(2):
        ttl.forward(width)
        ttl.right(90)
        ttl.forward(height)
        ttl.right(90)

def drawtriangle(ttl, x1, y1, x2, y2, x3, y3):
    ttl.penup()
    ttl.goto(x1, y1)
    ttl.pendown()
    ttl.goto(x2, y2)
    ttl.goto(x3, y3)
    ttl.goto(x1, y1)
    ttl.penup()

def filltriangle(ttl, x1, y1, x2, y2, x3, y3, color):
    ttl.fillcolor(color)
    ttl.begin_fill()
    drawtriangle(ttl, x1, y1, x2, y2, x3, y3)
    ttl.end_fill()

turtle.setup(1500, 1000, 0, 0)
myBlue = "#003882"
myYellow = "#FCD647"
myRed = "#D12421"
myGreen = "#007336"
myWhite = "#FFFFFF"
joe = turtle.Turtle()
joe.screen.colormode(255)
drawrectangle(joe, 0, 300, 600, 300)
joe.goto(0, 0)
filltriangle(joe, 0,0 , 0, 300, 200, 300, myBlue)
filltriangle(joe, 0, 0, 200, 300, 400, 300, myYellow)
filltriangle(joe, 0, 0, 400, 300, 600, 300, myRed)
filltriangle(joe, 0, 0, 600, 300, 600, 150, myWhite)
filltriangle(joe, 0, 0, 600, 150, 600, 0, myGreen)
joe.hideturtle()
ts = turtle.getscreen()
tc = ts.getcanvas()
tc.postscript(file="seychellesFlag.eps")
save_as_jpg(tc, "seychellesFlag")
turtle.hideturtle()
turtle.done()
