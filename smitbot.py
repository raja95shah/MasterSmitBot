import telebot
from telebot import types
import time
import urllib


def listener(messages):
    """
    When new messages arrive TeleBot will call this function.
    """
    for m in messages:
        if m.content_type == 'text':
            # print the sent message to the console
            print str(m.chat.first_name) + " [" + str(m.chat.id) + "]: " + m.text

bot = telebot.TeleBot("151353509:AAHDiSNxQZ3ctXKMyWPtlgNO5S9s3FnesEk")
bot.set_update_listener(listener)


@bot.message_handler(commands=['hi', 'help'])
def send_welcome(message):
    bot.reply_to(message, "Howdy, how are you doing?")