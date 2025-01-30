import os
import time
from colorama import Fore, Style, init

# Inicializa a Colorama para funcionar corretamente no Windows
init(autoreset=True)

# Solicita um texto do usuário
texto = input('Digite uma frase: ')

# Lista de cores disponíveis
cores = [Fore.RED, Fore.GREEN, Fore.YELLOW, Fore.BLUE, Fore.CYAN, Fore.MAGENTA, Fore.WHITE]

# Transforma a frase em uma lista de palavras
palavras = texto.split()

# Loop infinito para alternar cores das palavras
while True:
    for _ in range(len(cores)):  # Rotaciona as cores ao longo do tempo
        os.system('cls')
        # Monta a frase colorida com a ordem atual das cores
        frase_colorida = " ".join(cor + palavra + Style.RESET_ALL for palavra, cor in zip(palavras, cores * len(palavras)))

        # Usa "\r" para reescrever na mesma linha
        print("\r" + frase_colorida, end="", flush=True)
        
        time.sleep(1)  # Tempo menor para ficar mais dinâmico

        # Rotaciona a lista de cores (empurra o primeiro item para o final)
        cores.append(cores.pop(0))
