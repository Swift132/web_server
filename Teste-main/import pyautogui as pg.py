from ctypes.wintypes import HENHMETAFILE
from tkinter import BOTH, CENTER
import pyautogui as pg
import time 
time.sleep(10)

screenWidth, screnHeight = pg.size() # Pega no tamanho da tela
screenWidth, screnHeight
(1920, 1090)


for i in range(1):
    pg.write('Titulo')
    CENTER
    pg.press('Enter')

for i in range(2):
    pg.write('-------------')
    pg.press('Enter')

for i in range(9):
    pg.write('"TEXTO"')

for i in range(1):
    pg.write('"TEXTO"')
    pg.press('Enter')

for i in range(2):
    pg.write('-------------')
    pg.press('Enter')
 
pg.alert('Acabou já pode fechar') # Faz um alerta a indicar o fim. 
 
