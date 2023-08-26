import string
import secrets

chars = string.digits + string.ascii_letters + string.punctuation
print(len(chars)) # Entropie: 6.555, Min: 100 Bit
print(''.join(secrets.choice(chars) for _ in range(21)))
