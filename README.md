## Notas :
## Generate Keys

# Private Key
```` 
openssl genrsa -out chave_privada.key 2048
```` 

# CSR 
```` 
openssl req -new -key chave_privada.key -out csr.csr
```` 

# Certificado
```` 
openssl x509 -req -in csr.csr -signkey chave_privada.key -out certificado.crt
```` 

