import tkinter as tk 
from tkinter import ttk
from tkinter.messagebox import showinfo

Window = tk.Tk()
Window.configure(bg="white")
Window.geometry("300x200")
Window.resizable(False,False)
Window.title("Sapa")

NAMA_DEPAN = tk.StringVar()
NAMA_BELAKANG = tk.StringVar()

def tombol_click():
    pesan=f"Hello {NAMA_DEPAN.get()} {NAMA_BELAKANG.get()}, have a nice day"
    showinfo(title="Hi", message=pesan)

input_frame = ttk.Frame(Window)
input_frame.pack(padx=10, pady=10, fill="x", expand=True)

nama_depan_label = ttk.Label(input_frame, text="Nama Depan : ")
nama_depan_label.pack(padx=10, fill="x", expand=True)

nama_depan_entry = ttk.Entry(input_frame, textvariable=NAMA_DEPAN)
nama_depan_entry.pack(padx=10, fill="x", expand=True)

nama_belakang_label = ttk.Label(input_frame, text="Nama Belakang : ")
nama_belakang_label.pack(padx=10, fill="x", expand=True)

nama_belakang_entry = ttk.Entry(input_frame, textvariable=NAMA_BELAKANG)
nama_belakang_entry.pack(padx=10, fill="x", expand=True)

tombol=ttk.Button(input_frame, text="Sapa!", command=tombol_click)
tombol.pack(fill="x", expand=True, padx=10, pady=10)

Window.mainloop()