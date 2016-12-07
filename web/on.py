import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)


led=15

GPIO.setup(led,GPIO.OUT)
GPIO.output(led,GPIO.HIGH)
