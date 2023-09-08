print("PROGRAM PIRAMIDA")
print()
print("\n")
t_piramida=int(input("masukkan tinggi badan piramida:"))
print()
for i in range(t_piramida):
  print(' ' * (t_piramida-i),end='')
  print('* ' * (i+1))
            