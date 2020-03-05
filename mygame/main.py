import pygame as pg
import random

pg.init()

# Create screen
screen = pg.display.set_mode((1100, 700))

# Background
background = pg.image.load('map.png')

# Score
score_value = 0
font = pg.font.Font('freesansbold.ttf', 32)
textX = 10
textY = 10

# game over text 
over_font = pg.font.Font('freesansbold.ttf', 64)

# Player
playerImg = pg.image.load('player.png')
playerX = 80
playerY = 598

# Enemy 1
enemyImg = pg.image.load('enemy.png')
enemyX = 80
enemyY = -20
enemyY_change = 0

# # Enemy 2
# playerImg = pg.image.load('')
# playerX = 370
# playerY = 0

# # Enemy 3
# playerImg = pg.image.load('')
# playerX = 665
# playerY = 0

# # Enemy 4
# playerImg = pg.image.load('')
# playerX = 950
# playerY = 0

def player(x, y):
    screen.blit(playerImg, (x, y))

def enemy(x, y):
    screen.blit(enemyImg, (x,y))

def game_over_text():
    over_text = over_font.render("GAME OVER" + str(score_value), True, (255,255,255))
    screen.blit(over_text, (200, 250))

# Game Loop
running = True
while running:
    # Background image
    screen.blit(background, (0, 0))

    for event in pg.event.get():
        if event.type == pg.QUIT:
            running = False
        
        # If keystroke is pressed check whether its right or left
        if event.type == pg.KEYDOWN:
            if event.key == pg.K_q:
                playerX, playerY = 80, 598
                
            if event.key == pg.K_w:
                playerX, playerY = 370, 598

            if event.key == pg.K_e:
                playerX, playerY = 665, 598
                
            if event.key == pg.K_r:
                playerX, playerY = 950, 598
        


    enemyY += enemyY_change

    if enemyY <= 0:
        enemyY_change = 1
    elif enemyY >= 736:
        enemyY_change = -1


    player(playerX, playerY)
    enemy(enemyX, enemyY)
    pg.display.update()