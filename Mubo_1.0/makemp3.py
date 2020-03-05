# Make mp3 files
from gtts import gTTS
import os
tts = gTTS(text='What program would you want to start? Choose a number:', lang='en')
tts.save("WhatProgram.mp3")
os.system("WhatProgram.mp3")